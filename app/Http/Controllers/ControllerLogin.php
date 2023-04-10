<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class ControllerLogin extends Controller
{
    public function index() {
		return view('login', ["title" => "Login"]);
	}

    public function process_login(Request $req){
		$login = DB::table('user')->where('id_user', $req->input('id-user'))
								  ->where('password', $req->input('password'))
								  ->first();

        if ($login) // jika berhasil login
        {
            // cek jika checkbox remember me dicek
            if ($req->input('remember-me')) {
                Cookie::queue('id-user', $req->input('id-user'), 60*365);
                Cookie::queue('password', $req->input('password'), 60*365);
            } else {    // jika tidak hapus cookie
                Cookie::queue(Cookie::forget('id-user'));
                Cookie::queue(Cookie::forget('password'));
            }

            // set session untuk pengenal pengguna
            session(['id-user' => $login->id_user, 'username' => $login->username, 'role' => $login->role]);
        }
		else {  // jika gagal login
			$req->session()->flash('status', 'Username atau Password Salah');
			return redirect()->back()->withInput();			
		}

        return redirect()->action('ControllerDashboard@index');
	}
	
	public function process_logout(Request $req){
        // bersihkan session
		$req->session()->flush();
        return redirect()->action('ControllerLogin@index');
	}
}
