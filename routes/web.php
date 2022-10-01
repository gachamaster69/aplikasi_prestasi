<?php

use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

Route::get('/datamahasiswa',[DataMahasiswaController::class, 'datamahasiswa'])->name('datamahasiswa');
Route::get('/tambahdatamahasiswa',[DataMahasiswaController::class, 'tambahdatamahasiswa'])->name('tambahdatamahasiswa');
Route::post('/insertdata',[DataMahasiswaController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}',[DataMahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DataMahasiswaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}',[DataMahasiswaController::class, 'deletedata'])->name('deletedata');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/exportexcel',[DataMahasiswaController::class, 'exportexcel'])->name('exportexcel');
Route::post('/importexcel',[DataMahasiswaController::class, 'importexcel'])->name('importexcel');
