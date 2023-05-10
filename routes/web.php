<?php

use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrestasiMahasiswaController;
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

Route::group(['middleware' => ['auth','hakakses:superadmin']], function(){

    Route::get('/superadmindashboard',[DataUserController::class, 'superadmindashboard'])->name('superadmindashboard');
    Route::post('/insertuser',[DataUserController::class, 'insertuser'])->name('insertuser');

});

Route::post('/insertdata',[DataMahasiswaController::class, 'insertdata'])->name('insertdata');
Route::post('/insertprestasi',[PrestasiMahasiswaController::class, 'insertprestasi'])->name('insertprestasi');

Route::get('/welcome',[DataMahasiswaController::class, 'welcome'])->name('welcome')->middleware('auth');

Route::get('/datamahasiswa',[DataMahasiswaController::class, 'datamahasiswa'])->name('datamahasiswa')->middleware('auth');
Route::get('/dataprestasi/{id}',[PrestasiMahasiswaController::class, 'dataprestasi'])->name('dataprestasi')->middleware('auth');

Route::get('/prestasiakademik',[PrestasiMahasiswaController::class, 'prestasiakademik'])->name('prestasiakademik')->middleware('auth');;
Route::get('/prestasinonakademik',[PrestasiMahasiswaController::class, 'prestasinonakademik'])->name('prestasinonakademik')->middleware('auth');;

Route::get('/tambahdatamahasiswa',[DataMahasiswaController::class, 'tambahdatamahasiswa'])->name('tambahdatamahasiswa')->middleware('auth');;
Route::get('/tambahprestasi/{id}',[PrestasiMahasiswaController::class, 'tambahprestasi'])->name('tambahprestasi')->middleware('auth');;
Route::get('/tambahdatauser',[DataUserController::class, 'tambahdatauser'])->name('tambahdatauser')->middleware('auth');;

Route::get('/tampilkandata/{id}',[DataMahasiswaController::class, 'tampilkandata'])->name('tampilkandata')->middleware('auth');;
Route::post('/updatedata/{id}',[DataMahasiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/tampilkanprestasi/{id}',[PrestasiMahasiswaController::class, 'tampilkanprestasi'])->name('tampilkanprestasi')->middleware('auth');;
Route::post('/updateprestasi/{id}',[PrestasiMahasiswaController::class, 'updateprestasi'])->name('updateprestasi');

Route::get('/tampilkandatauser/{id}',[DataUserController::class, 'tampilkandatauser'])->name('tampilkandatauser')->middleware('auth');;
Route::post('/updatedatauser/{id}',[DataUserController::class, 'updatedatauser'])->name('updatedatauser');

Route::get('/deletedata/{id}',[DataMahasiswaController::class, 'deletedata'])->name('deletedata');
Route::get('/deleteprestasi/{id}',[PrestasiMahasiswaController::class, 'deleteprestasi'])->name('deleteprestasi');
Route::get('/deleteprestasiakademik/{id}',[PrestasiMahasiswaController::class, 'deleteprestasiakademik'])->name('deleteprestasiakademik');
Route::get('/deleteprestasinonakademik/{id}',[PrestasiMahasiswaController::class, 'deleteprestasinonakademik'])->name('deleteprestasinonakademik');
Route::get('/deletedatauser/{id}',[DataUserController::class, 'deletedatauser'])->name('deletedatauser');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/',[DataMahasiswaController::class, 'landing'])->name('landing');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::post('/importexcel',[DataMahasiswaController::class, 'importexcel'])->name('importexcel');
Route::get('/exportexcel',[DataMahasiswaController::class, 'exportexcel'])->name('exportexcel');
