<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\detailpostingController;
use App\Http\Controllers\contactController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register',[UserController::class,'register']);
Route::post('register/post',[UserController::class,'post']);

Route::get('/login', [UserController::class , 'login']);
Route::post('/auth',[UserController::class,'auth']);

Route::get('/admin', [AdminController::class , 'admin']);
Route::post('/auth',[AdminController::class,'auth']);
Route::get('/akunadmin',[AdminController::class,'show']);
Route::get('/dashboardadmin',[AdminController::class,'index']);

Route::get('/dashboard',[UserController::class,'index']);
Route::get('/template',[UserController::class,'show']);


Route::get('/posting',[PostingController::class,'show']);
Route::post('/posting/post',[PostingController::class,'post']);
Route::get('/viewposting',[PostingController::class,'index']);
Route::get('/postinghapus/{id}',[PostingController::class,'hapus']);
Route::post('/posting/update/{id}',[PostingController::class,'update']);
Route::get('/posting/edit/{id}',[PostingController::class,'edit']);
Route::get('/dataposting',[PostingController::class,'tampil']);
Route::post('/update-status/{id}', [PostingController::class,'update_status']);
Route::get('/detailposting',[detailpostingController::class,'show']);
Route::get('/posting/{id}/Dikonfirmasi', [PostingController::class, 'Dikonfirmasi']);


Route::get('/pengajuan',[PengajuanController::class,'show']);
Route::post('/pengajuan/post',[PengajuanController::class,'post']);
Route::get('/viewpengajuan',[PengajuanController::class,'index']);
Route::get('/pengajuanhapus/{id}',[PengajuanController::class,'hapus']);
Route::post('/pengajuan/update/{id}',[PengajuanController::class,'update']);
Route::get('/pengajuan/edit/{id}',[PengajuanController::class,'edit']);
Route::get('/datapengajuan',[PengajuanController::class,'view']);
Route::get('/pengajuan/{id}/Dikonfirmasi', [PengajuanController::class, 'Dikonfirmasi']);


Route::get('/perusahaan',[PerusahaanController::class,'show']);
Route::post('/perusahaan/post',[PerusahaanController::class,'post']);
Route::get('/viewperusahaan',[PerusahaanController::class,'index']);
Route::get('/perusahaanhapus/{id}',[PerusahaanController::class,'hapus']);
Route::post('/perusahaan/update/{id}',[PerusahaanController::class,'update']);
Route::get('/perusahaan/edit/{id}',[PerusahaanController::class,'edit']);
Route::get('/tampilperusahaan',[PerusahaanController::class,'tampil']);

Route::get('/viewcontact',[contactController::class,'index']);
Route::post('/contact/post',[contactController::class,'post']);
Route::get('/contacthapus/{id}',[contactcontroller::class,'hapus']);
Route::post('/contact/update/{id}',[contactcontroller::class,'update']);
Route::get('/contact/edit/{id}',[contactcontroller::class,'edit']);

