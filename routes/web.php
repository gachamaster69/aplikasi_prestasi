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

Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => ['auth','hakakses:superadmin']], function(){

    Route::get('/superadmindashboard',[DataUserController::class, 'superadmindashboard'])->name('superadmindashboard');
    Route::post('/insertuser',[DataUserController::class, 'insertuser'])->name('insertuser');

});

Route::post('/insertdata',[DataMahasiswaController::class, 'insertdata'])->name('insertdata');
Route::post('/insertprestasi',[PrestasiMahasiswaController::class, 'insertprestasi'])->name('insertprestasi');

Route::get('/welcome',[DataMahasiswaController::class, 'welcome'])->name('welcome');

Route::get('/datamahasiswa',[DataMahasiswaController::class, 'datamahasiswa'])->name('datamahasiswa');
Route::get('/dataprestasi/{id}',[PrestasiMahasiswaController::class, 'dataprestasi'])->name('dataprestasi');

Route::get('/prestasiakademik',[PrestasiMahasiswaController::class, 'prestasiakademik'])->name('prestasiakademik');
Route::get('/prestasinonakademik',[PrestasiMahasiswaController::class, 'prestasinonakademik'])->name('prestasinonakademik');

Route::get('/tambahdatamahasiswa',[DataMahasiswaController::class, 'tambahdatamahasiswa'])->name('tambahdatamahasiswa');
Route::get('/tambahprestasi/{id}',[PrestasiMahasiswaController::class, 'tambahprestasi'])->name('tambahprestasi');
Route::get('/tambahdatauser',[DataUserController::class, 'tambahdatauser'])->name('tambahdatauser');

Route::get('/tampilkandata/{id}',[DataMahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DataMahasiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/tampilkanprestasi/{id}',[PrestasiMahasiswaController::class, 'tampilkanprestasi'])->name('tampilkanprestasi');
Route::post('/updateprestasi/{id}',[PrestasiMahasiswaController::class, 'updateprestasi'])->name('updateprestasi');

Route::get('/tampilkandatauser/{id}',[DataUserController::class, 'tampilkandatauser'])->name('tampilkandatauser');
Route::post('/updatedatauser/{id}',[DataUserController::class, 'updatedatauser'])->name('updatedatauser');

Route::get('/deletedata/{id}',[DataMahasiswaController::class, 'deletedata'])->name('deletedata');
Route::get('/deleteprestasi/{id}',[PrestasiMahasiswaController::class, 'deleteprestasi'])->name('deleteprestasi');
Route::get('/deleteprestasiakademik/{id}',[PrestasiMahasiswaController::class, 'deleteprestasiakademik'])->name('deleteprestasiakademik');
Route::get('/deleteprestasinonakademik/{id}',[PrestasiMahasiswaController::class, 'deleteprestasinonakademik'])->name('deleteprestasinonakademik');
Route::get('/deletedatauser/{id}',[DataUserController::class, 'deletedatauser'])->name('deletedatauser');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::post('/importexcel',[DataMahasiswaController::class, 'importexcel'])->name('importexcel');
Route::get('/exportexcel',[DataMahasiswaController::class, 'exportexcel'])->name('exportexcel');
