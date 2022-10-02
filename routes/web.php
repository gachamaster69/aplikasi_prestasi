<?php

use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\DataUserController;
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
    return view('login');
});

Route::group(['middleware' => ['auth','hakakses:superadmin']], function(){
    
    Route::get('/superadmindashboard',[DataUserController::class, 'superadmindashboard'])->name('superadmindashboard');
    Route::post('/insertuser',[DataUserController::class, 'insertuser'])->name('insertuser');
    
});

Route::post('/insertdata',[DataMahasiswaController::class, 'insertdata'])->name('insertdata');
Route::get('/welcome',[DataMahasiswaController::class, 'welcome'])->name('welcome');
Route::get('/datamahasiswa',[DataMahasiswaController::class, 'datamahasiswa'])->name('datamahasiswa');

Route::get('/datamahasiswaipk',[DataMahasiswaController::class, 'datamahasiswaipk'])->name('datamahasiswaipk');
Route::get('/datamahasiswapendapatan',[DataMahasiswaController::class, 'datamahasiswapendapatan'])->name('datamahasiswapendapatan');
Route::get('/datamahasiswanasional',[DataMahasiswaController::class, 'datamahasiswanasional'])->name('datamahasiswanasional');
Route::get('/datamahasiswainternasional',[DataMahasiswaController::class, 'datamahasiswainternasional'])->name('datamahasiswainternasional');
Route::get('/datamahasiswatunggakan',[DataMahasiswaController::class, 'datamahasiswatunggakan'])->name('datamahasiswatunggakan');

Route::get('/tambahdatamahasiswa',[DataMahasiswaController::class, 'tambahdatamahasiswa'])->name('tambahdatamahasiswa');
Route::get('/tambahdatauser',[DataUserController::class, 'tambahdatauser'])->name('tambahdatauser');

Route::get('/tampilkandata/{id}',[DataMahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DataMahasiswaController::class, 'updatedata'])->name('updatedata');

Route::get('/tampilkandatauser/{id}',[DataUserController::class, 'tampilkandatauser'])->name('tampilkandatauser');
Route::post('/updatedatauser/{id}',[DataUserController::class, 'updatedatauser'])->name('updatedatauser');
Route::get('/deletedata/{id}',[DataMahasiswaController::class, 'deletedata'])->name('deletedata');
Route::get('/deletedatauser/{id}',[DataUserController::class, 'deletedatauser'])->name('deletedatauser');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/exportexcel',[DataMahasiswaController::class, 'exportexcel'])->name('exportexcel');
Route::get('/exportexcelipk',[DataMahasiswaController::class, 'exportexcelipk'])->name('exportexcelipk');
Route::get('/exportexcelpendapatan',[DataMahasiswaController::class, 'exportexcelpendapatan'])->name('exportexcelpendapatan');
Route::get('/exportexcelnasional',[DataMahasiswaController::class, 'exportexcelnasional'])->name('exportexcelnasional');
Route::get('/exportexcelinternasional',[DataMahasiswaController::class, 'exportexcelinternasional'])->name('exportexcelinternasional');
Route::get('/exportexceltunggakan',[DataMahasiswaController::class, 'exportexceltunggakan'])->name('exportexceltunggakan');

Route::post('/importexcel',[DataMahasiswaController::class, 'importexcel'])->name('importexcel');
