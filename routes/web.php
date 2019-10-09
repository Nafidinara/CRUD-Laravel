<?php
use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Route;

// use Symfony\Component\Routing\Route;

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
    return view('welcome');
});
Route::get('/halo',function(){
    return "hallo my name alfara";
});
Route::get('/blog',function(){
    return view('blog');
});

//memanggil controller
Route::get('dosen','DosenController@index');
//memanggil method index pada DosenController

//passing view from controller
Route::get('bio','DosenController@biodata');

Route::get('/pegawai/{nama}','PegawaiController@index');

//input data dan menampilkan
Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//manmpilkan data dari db
Route::get('/pekerja','PekerjaController@index');

//insert data ke db dgn form
Route::get('/pekerja/tambah','PekerjaController@tambah');
//menerima data dari form
Route::post('/pekerja/store','PekerjaController@store');

//update data dari db
Route::get('/pekerja/edit/{id}','PekerjaController@edit');
//menerima data dari form
Route::post('/pekerja/update','PekerjaController@update');

//delete data dari db
Route::get('/pekerja/hapus/{id}','PekerjaController@hapus');
