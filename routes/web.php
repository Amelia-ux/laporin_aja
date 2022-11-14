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
    return view('login');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', function(){
    return view('register');
});

Route::get('/pengguna', function(){
    return view('admin/dataPengguna');
});

Route::get('/laporan', function(){
    return view('admin/laporan');
});

Route::get('/adminProfil', function(){
    return view('admin/profil');
});

Route::get('/userProfil', function(){
    return view('user/userProfil');
});
Route::get('/riwayat', function(){
    return view('user/riwayat');
});

Route::get('/buatLaporan', function(){
    return view('user/buatLaporan');
});