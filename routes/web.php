<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',["title" => "Home"]);
});
Route::get('/history', function () {
    return view('history',["title" => "History"]);
});
Route::get('/product', function () {
    $dtahmad = DB::table('product')->orderby('nama_product', 'asc')->get();
    return view('product', compact('dtahmad'),["title" => "Product"]);
});
Route::get('/contactinfo', function () {
    return view('contactinfo',["title" => "Contact Info"]);
});
Route::get('/contactform', function () {
    return view('contactform',["title" => "Contact Form"]);
});

Route::post('/login/process', 'ControllerLogin@process_login');     // process validasi login
Route::get('/login', 'ControllerLogin@index');  // tampilkan form log in
Route::get('/logout', 'ControllerLogin@process_logout');    // process backend logout

// redirect ke manage_user sebagai default page yang dibuka pada dashbaard
Route::get('/dashboard', function() { return redirect('/manage_user'); });  

Route::post('/manage_user/{id_user}/update/process', 'ControllerUser@update_process');   // process backend update user
Route::get('/manage_user/{id_user}/update', 'ControllerUser@update');   // fetch data dari db ke form update
Route::get('/manage_user/{id_user}/delete', 'ControllerUser@delete_process');   // process backend delete user
Route::post('/manage_user/create/process', 'ControllerUser@create_process'); // process backend create user
Route::get('/manage_user/create', 'ControllerUser@create'); // tampilkan form create user
Route::get('/manage_user', 'ControllerDashboard@index');    // go to dashboard setelah log in

Route::get('/contactform/all', function() {
    $contactlist = DB::table('contact')->orderby('nama_contact', 'asc')->get();
    return view('viewContact', compact('contactlist'), ["title" => "Manage Contact"]);
});
Route::post('/contactform/process', 'ControllerContact@process_create');
Route::get('/contactform/delete/{nama_contact}', 'ControllerContact@delete');

//VIEW PRODUCT
Route::get('/manage_product', function () {
    $dtahmad = DB::table('product')->orderby('kode_product', 'asc')->get();
	return view('manageproduct', compact('dtahmad'),["title" => "Manage Product"]);
}); 

//CREATE PRODUCT
Route::get('/product/create/',function () {
    return view('createproduct',["title" => "Create Product"]);
});
Route::post('/product/create/process','ControllerProduct@process_create');

//UPDATE PRODUCT
Route::get('/product/update/{kode_product}',function (Request $req, $kode_product) {
    $dtahmad = DB::table('product')->where('kode_product', $kode_product)->first();
    return view('updateproduct',compact('dtahmad'), ["title" => "Update Product"]);
});
Route::post('/product/update/{kode_product}/process', 'ControllerProduct@process_update');

//SEARCH PRODUCT
Route::get('/cari','ControllerProduct@index');

//Delete Product
Route::get('/manage_product/delete/{kode_product}','ControllerProduct@delete');