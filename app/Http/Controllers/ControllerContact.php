<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Session;

class ControllerContact extends Controller
{
    public function index()
    {
        $contactlist = DB::table('contact')->orderby('nama_contact', 'asc')->get();
        return view('viewContact', compact('contactlist'));
    }

    public function create()
	{
		return view('contactform');
	}

    public function process_create(Request $req)
	{
        try {
            DB::table('contact')->insert([
                'nama_contact' => $req->nama_contact,
                'email_contact' => $req->email_contact,
                'telephone_contact' => $req->telephone_contact,
                'address_contact' => $req->address_contact,
                'country_contact' => $req->country_contact,
                'city_contact' => $req->city_contact,
                'message_contact' => $req->message_contact
            ]);
			Session::flash('success', 'Berhasil Mengirim Pesan');
        }
        catch(QueryException $ex) {
            
        }
        return redirect('/contactform');
	}

    public function delete(Request $req, $time)
    {
        if (session()->has('id-user')) {
            try {
                DB::table('contact')->where('time', $time)->delete();
                Session::flash('success', 'Berhasil Delete Message');
            }
            catch (QueryException $ex) {
                Session::flash('failed', 'Gagal delete message');
            }
            return redirect('/contactform/all');
        }
        else {
            return redirect('/login');
        }
    }
}
