<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index', function () {
    return view('index');
});


Route::get('login',[AdminController::class,'adminlogin']);
Route::post('login',[AdminController::class,'cekadminlogin']);

Route::get('register',[AdminController::class,'registrasiadmin']);
Route::post('register',[AdminController::class,'simpanadmin']);
Route::get('dataadmin',[AdminController::class,'dataAdmin']);
Route::post('dataadmin',[AdminController::class,'cekdataAdmin']);

Route::get('editadmin/{id}',[AdminController::class,'editAdmin']);
Route::post('editadmin/{id}',[AdminController::class,'cekeditadmin']);
Route::get('hapusadmin/{id}',[AdminController::class,'hapusadmin']);

Route::get('tambah',[AdminController::class,'tambahBuku']);
Route::post('tambah',[AdminController::class,'cektambahbuku']);
Route::get('databuku',[AdminController::class,'dataBuku']);
Route::post('databuku',[AdminController::class,'cekdatabuku']);

Route::get('editbuku/{id}',[AdminController::class,'editBuku']);
Route::post('editbuku/{id}',[AdminController::class,'cekeditbuku']);
Route::get('hapusbuku/{id}',[AdminController::class,'hapusbuku']);

Route::get('tambahkategori',[AdminController::class,'tambahKategori']);
Route::post('tambahkategori',[AdminController::class,'cektambahkategori']);
Route::get('kategori',[AdminController::class,'dataKategori']);
Route::post('kategori',[AdminController::class,'cekdatakategori']);

Route::get('editkategori/{id}',[AdminController::class,'editKategori']);
Route::post('editkategori/{id}',[AdminController::class,'cekeditkategori']);
Route::get('hapuskategori/{id}',[AdminController::class,'hapuskategori']);

Route::get('tambahrelasi',[AdminController::class,'tambahRelasi']);
Route::post('tambahrelasi',[AdminController::class,'cektambahrelasi']);
Route::get('relasi',[AdminController::class,'dataRelasi']);
Route::post('relasi',[AdminController::class,'cekdatarelasi']);