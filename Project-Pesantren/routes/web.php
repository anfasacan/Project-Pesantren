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

// Route::get('/', function () {
//     return view('welcome');
// });
//main
Route::get('/', 'PagesController@index');
Route::get('/berita', 'PagesController@berita');
Route::get('/agenda', 'PagesController@agenda');
Route::get('/guru', 'PagesController@guru');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/tentang', 'PagesController@tentang');

//admin
//login dan logout
Route::get('/login', 'PagesController@login');
Route::post('/postlogin','LogController@postlogin'); 
Route::get('/login_adm','LogController@login')->name('login')->middleware('auth');
Route::get('/logout', 'LogController@logout');

//main page
Route::get('/admin_dashboard', 'AdminController@dashboard')->middleware('auth');
Route::get('/admin_artikel', 'AdminController@artikel')->middleware('auth');
Route::get('/admin_agenda', 'AdminController@agenda')->middleware('auth');
Route::get('/admin_galeri', 'AdminController@galeri')->middleware('auth');
Route::get('/admin_guru', 'AdminController@guru')->middleware('auth');

//edit data
//artikel
Route::get('/admin_artikel/{artikel}/edit','A_ArtikelController@edit_artikel')->middleware('auth');
Route::patch('/admin_artikel/{artikel}/update','A_ArtikelController@update_artikel')->middleware('auth');
//agenda
Route::get('/admin_agenda/{agenda}/edit','A_AgendaController@edit_agenda')->middleware('auth');
Route::patch('/admin_agenda/{agenda}/update','A_AgendaController@update_agenda')->middleware('auth');
//galeri
Route::get('/admin_galeri/{galeri}/edit','A_galeriController@edit_galeri')->middleware('auth');
Route::patch('/admin_galeri/{galeri}/update','A_galeriController@update_galeri')->middleware('auth');
//guru
Route::get('/admin_guru/{guru}/edit','A_guruController@edit_guru')->middleware('auth');
Route::patch('/admin_guru/{guru}/update','A_guruController@update_guru')->middleware('auth');

//add data  
//artikel
Route::get('/admin_artikel/tambah_artikel','A_ArtikelController@tambah_artikel')->middleware('auth');
Route::post('/admin_artikel/tambahkan','A_ArtikelController@tambahkan_artikel')->middleware('auth');
//agenda
Route::get('/admin_agenda/tambah_agenda','A_AgendaController@tambah_agenda')->middleware('auth');
Route::post('/admin_agenda/tambahkan','A_AgendaController@tambahkan_agenda')->middleware('auth');
//galeri
Route::get('/admin_galeri/tambah_galeri','A_GaleriController@tambah_galeri')->middleware('auth');
Route::post('/admin_galeri/tambahkan','A_GaleriController@tambahkan_galeri')->middleware('auth');
//guru
Route::get('/admin_guru/tambah_guru','A_GuruController@tambah_guru')->middleware('auth');
Route::post('/admin_guru/tambahkan','A_GuruController@tambahkan_guru')->middleware('auth');

//delete data
//artikel
Route::delete('/admin_artikel/{artikel}/hapus','A_ArtikelController@hapus_artikel')->middleware('auth');
//agenda
Route::delete('/admin_agenda/{agenda}/hapus','A_AgendaController@hapus_agenda')->middleware('auth');
//galeri
Route::delete('/admin_galeri/{galeri}/hapus','A_GaleriController@hapus_galeri')->middleware('auth');
//guru
Route::delete('/admin_guru/{guru}/hapus','A_GuruController@hapus_guru')->middleware('auth');




