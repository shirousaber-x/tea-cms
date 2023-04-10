<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

// Controller ini bertujuan untuk menampilkan daftar data dari database untuk setiap menu di navbar

// Controller ini harus mengecek apakah pengguna telah login atau belum,
// karena jika pengguna belum login tetapi tidak dicek, maka pengguna bisa ke dashboard
// dengan hanya mengetikan di url
class ControllerDashboard extends Controller
{
    // function index secara default mengarahkan ke manage user
    public function index(Request $req) {
        if (session()->has('id-user')) {
            $dataUser = null;

            if ($req->has('search')) {  // jika pengguna mengetikan keyword di searchbox
                $dataUser = DB::table('user')->where('id_user', 'like', '%' . $req->input('search') . '%')
                                 ->orWhere('username', 'like', '%' . $req->input('search') . '%')
                                 ->orWhere('role', 'like', '%' . $req->input('search') . '%')->get();
            } else {
                $dataUser = DB::table('user')->get();
            }

            session()->flashInput($req->input());   // flash input untuk menampilkan kembali keyword pada searchbox setelah pencarian
            return view('manageUser', ['title' => 'Manage User', 'dataUser' => $dataUser]);
        }
        else
            return redirect('/login');
	}
}
