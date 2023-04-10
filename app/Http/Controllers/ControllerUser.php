<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

// Semua function di controller ini hanya boleh dijalankan jika pengguna
// telah login, oleh karena itu di awal setiap function akan dicek jika pengguna
// telah login dengan mengecek jika session login telah diset
class ControllerUser extends Controller
{
    public function create() {
        if (session()->has('id-user')) {
            return view('createUser', ['title' => 'Form Create User']);
        }
        else
            return redirect('/login');
    }

    public function create_process(Request $req) {
        if (session()->has('id-user')) {
            $file 				        = $req->file('foto');
            $allowed_extensions			= ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'svg', 'webp'];

            if (in_array($file->extension(), $allowed_extensions)) {     // cek jika extension file ada di $allowed_extensions
                $nama_file 	= $req->input('id-user') . "." . $file->extension();

                try {
                    DB::table('user')->insert([         
                        'id_user' => $req->input('id-user'),
                        'username' => $req->input('username'),
                        'password' => $req->input('password'),
                        'role' => $req->input('role'),
                        'foto' => $nama_file]
                );
                } catch (QueryException $q) {
                    session()->flash('status', "User ID \"" . $req->input('id-user') . "\" sudah ada");
                    return redirect()->back()->withInput();
                }

                $file->move(public_path('/foto user'), $nama_file);
                session()->flash('statusBerhasil', 'Berhasil Create User');
                return redirect('manage_user');
            } else {
                session()->flash('status', "Extensi foto hanya boleh 'jpg', 'jpeg', 'png', 'bmp', 'gif', 'svg', atau 'webp'");
                return redirect()->back()->withInput();
            }
        }
        else
            return redirect('/login');
    }

    // mengambil detail user dan menampilkan di form update
    public function update(Request $req, $id_user) {
        if (session()->has('id-user')) {    // cek jika telah login
            $dataUser = DB::table('user')->where('id_user', '=', $id_user)->first();
    
            if ($dataUser) {    // cek jika data dengan user id = $id_user ditemukan
                return view('updateUser', ['title' => 'Form Update User', 'dataUser' => $dataUser]);
            } else {
                return redirect()->back()->with('statusGagal', "\"$id_user\" tidak ditemukan!");
            } 
        }
        else
            return redirect('/login');
    }

    // update user di database
    public function update_process(Request $req, $id_user) {
        if (session()->has('id-user')) {
            if ($req->hasFile('foto')) {
                // delete foto yang lama di public_path()
                $nama_foto_lama = DB::table('user')->where('id_user', '=', $id_user)->first()->foto;
                File::delete(public_path("foto user/$nama_foto_lama"));

                // lakukan validasi untuk file foto
                $file 				        = $req->file('foto');
                $allowed_extensions			= ['jpg', 'jpeg', 'png', 'bmp', 'gif', 'svg', 'webp'];

                if (in_array($file->extension(), $allowed_extensions)) {     // cek jika extension file ada di $allowed_extensions
                    $nama_file 	= $req->input('id-user') . "." . $file->extension();
                    
                    DB::table('user')->where('id_user', '=', $id_user)->update([
                        'username' => $req->input('username'),
                        'password' => $req->input('password'),
                        'role' => $req->input('role'),
                        'foto' => $nama_file
                    ]);
                    

                    $file->move(public_path('/foto user'), $nama_file);
                    session()->flash('statusBerhasil', 'Berhasil Update User');
                    return redirect('manage_user');
                } else {
                    session()->flash('status', "Extensi foto hanya boleh 'jpg', 'jpeg', 'png', 'bmp', 'gif', 'svg', atau 'webp'");
                    return redirect()->back()->withInput();
                }
            } else {    // user tidak mengupdate foto baru
                DB::table('user')->where('id_user', '=', $id_user)->update([
                    'username' => $req->input('username'),
                    'password' => $req->input('password'),
                    'role' => $req->input('role')
                ]);

                session()->flash('statusBerhasil', 'Berhasil Update User');
                return redirect('manage_user');
            }
        }
        else
            return redirect('/login');
    }

    // delete user di database
    public function delete_process(Request $req, $id_user) {
        if (session()->has('id-user')) {
            if (!empty(DB::table('user')->where('id_user', '=', $id_user)->first())) {  // cek jika data yang akan didelete ada di db
                $nama_foto = DB::table('user')->where('id_user', '=', $id_user)->first()->foto;
                DB::table('user')->where('id_user', '=', $id_user)->delete();
    
                File::delete(public_path("foto user/$nama_foto"));
                return redirect('manage_user')->with('statusBerhasil', "Berhasil menghapus user \"$id_user\"");
            }

            // jika tdk ada data yang didelete
            return redirect('manage_user')->with('statusGagal', "Gagal menghapus user \"$id_user\"");
        }
        else
            return redirect('/login');   
    }
}
