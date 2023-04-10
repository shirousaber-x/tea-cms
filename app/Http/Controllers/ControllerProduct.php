<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use file;


class ControllerProduct extends Controller
{
    public function index(Request $req) {
        if (session()->has('id-user')) {
            $dtahmad = null;

            if ($req->has('search')) {
                $dtahmad = DB::table('product')->where('kode_product', 'like', '%' . $req->input('search') . '%')
                                 ->orWhere('nama_product', 'like', '%' . $req->input('search') . '%')->get();
            } else {
                $dtahmad = DB::table('product')->get();
            }

            session()->flashInput($req->input());
            return view('manageproduct', ['title' => 'Manage Product', 'dtahmad' => $dtahmad]);
        }
        else
            return redirect('/login');
	}

	public function create()
	{
		return view('createproduct');
	}

	public function process_create(Request $req)
	{
        try{
            $file 				= $req->file('fotopro');
            $extension			=['jpeg','jpg','png'];
            $extension_file 	= $file->getClientOriginalExtension();
            $size_file			= $file->getSize();
            $check				= in_array($extension_file,$extension);
            if($check){
                    $nama_file 	= $req->kd_pro.".".$file->getClientOriginalExtension();
                    DB::table('product')->insert([
                        'kode_product'    =>$req->kd_pro,
                        'foto'		      =>$nama_file,
                        'nama_product'	  =>$req->nama_pro,
                        'deskripsi'	      =>$req->deskripsi
                    ]);
                    $tujuan_upload 	= 'foto product';
                    $file->move($tujuan_upload,$nama_file);
                    Session::flash('success', 'Berhasil Create Product');
            }
            else{
                Session::flash('failed', 'Extension file yang diterima hanya .jpeg, .jpg, dan .png');
                return redirect()->back()->withInput();	
            }
        }
        catch(QueryException $ex){
            Session::flash('failed', $req->kd_pro.' telah ada dalam database');
        }
        return redirect()->intended('/manage_product');
    }

    public function update(Request $req, $kode_product){
        if($req->session()->has('id-user')){
            $dtahmad = DB::table('product')->where('kode_product', $kode_product)-> first();
			return view('manageproduct', ['title' => 'Update Product', 'dtahmad' => $dtahmad]);
        }
        else{
             return redirect()->action('/login');
        }
	}
	
	public function process_update(Request $req){
        if($req->session()->has('id-user')){
            $kd_pro     = $req->kd_pro;
            $nama_pro   = $req->nama_pro;
            $deskripsi  = $req->deskripsi;
			try{
				if(empty($req->file('fotopro'))) {
					DB::table('product')	->where('kode_product', $kd_pro)
											->update([
                                                'kode_product'    =>$req->kd_pro,
                                                'nama_product'	  =>$req->nama_pro,
                                                'deskripsi'	      =>$req->deskripsi]);
					Session::flash('success', 'Berhasil Update Data Product');
				}
				else{
					$file 				= $req->file('fotopro');
                    $extension			=['jpeg','jpg','png'];
                    $extension_file 	= $file->getClientOriginalExtension();
                    $size_file			= $file->getSize();
                    $check				= in_array($extension_file,$extension);
					if($check){
							$old  		= DB::table('product')->where('kode_product', $kd_pro)
																->get();
										
							$nama_file 	= $req->kd_pro.".".$file->getClientOriginalExtension();
									
							DB::table('product')	->where('kode_product', $kd_pro)
													->update([
                                                        'kode_product'    =>$req->kd_pro,
                                                        'foto'		      =>$nama_file,
                                                        'nama_product'	  =>$req->nama_pro,
                                                        'deskripsi'	      =>$req->deskripsi]);
							foreach ($old as $o){
								unlink(public_path("foto product/".$o->foto));
							}
							
							$tujuan_upload 	= 'foto product';
							$file->move($tujuan_upload,$nama_file);
							
							Session::flash('success', 'Berhasil Update Data Product');
					}
					else{
						Session::flash('failed', 'Extension file yang diterima hanya .jpeg, .jpg, dan .png');
						return redirect()->back()->withInput();	
					}
					return redirect()->intended('/manage_product');
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Gagal update data ke dalam database');
			}
			return redirect()->intended('/manage_product');
		}
		else{
			return redirect()->action('/login');
		}
    }
   public function delete(Request $req, $kode_product)
   {
	   if (session()->has('id-user')) {
		   try {
			   DB::table('product')->where('kode_product', $kode_product)->delete();
			   Session::flash('success', 'Berhasil Delete Product');
		   }
		   catch (QueryException $ex) {
			   Session::flash('failed', 'Gagal Delete Product');
		   }
		   return redirect('/manage_product');
	   }
	   else {
		   return redirect('/login');
	   }
   }
}