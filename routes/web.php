<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('landing');
});

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/simpanregister', 'LoginController@simpanregister')->name('simpanregister');

Route::get('/email/verify', function (){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();

    return redirect('/login');
})->middleware(['auth','signed'])->name('verification.verify');

Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecamatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');

Route::group(['middleware' => ['auth', 'ceklevel:admin,petugas']], function() {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile', 'ProfileController@userProfile');
    Route::put('/profile/update/{id}', 'ProfileController@updateProfile');

    Route::post('/datakbptn', 'ProfileController@datakbptn')->name('datakbptn');
    Route::post('/datakcmtn', 'ProfileController@datakcmtn')->name('datakcmtn');
    Route::post('/datads', 'ProfileController@datads')->name('datads');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
    // pengaduan
    Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
    Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
    Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
    Route::get('/pengaduan/detail/{id}', 'PengaduanController@show');
    Route::get('/pengaduan/delete/{id}', 'PengaduanController@delete');
    Route::post('/pengaduan/detail/onchange/{id}', 'PengaduanController@statusOnchange')->name('admin.statusOnchange');
    Route::post('/pengaduan/detail/{id}', 'TanggapanController@store');
    Route::get('/pengaduan/pdf', 'AdminController@cetakpdf')->name('pengaduan.pdf');
    Route::get('/pengaduan/formcetak', 'AdminController@formcetak');
    Route::get('/pengaduan/cetakpertanggal/{tglawal}/{tglakhir}', 'AdminController@cetakpertanggal')->name('pengaduan.cetak');

    // data petugas
    Route::get('/petugas', 'AdminController@index')->name('petugas');
    Route::get('/petugas/create', 'AdminController@create');
    Route::post('/petugas/store', 'AdminController@store');
    Route::get('/petugas/show/{id}', 'AdminController@show');
    Route::get('/petugas/delete/{id}', 'AdminController@delete');

    Route::post('/getkbptn', 'AdminController@getkbptn')->name('getkbptn');
    Route::post('/getkcmtn', 'AdminController@getkcmtn')->name('getkcmtn');
    Route::post('/getds', 'AdminController@getds')->name('getds');

    //tampil data masyarakat
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/show/{id}', 'UserController@show');
    Route::get('/user/destroy/{id}', 'UserController@destroy');
});

Route::group(['middleware' => ['auth', 'ceklevel:masyarakat']], function() {
    Route::get('/profile/showmas', 'ProfileController@userProfileMas');
    Route::put('/profile/showmas/update/{id}', 'ProfileController@updateProfileMas');

    Route::post('/datakabupaten', 'ProfileController@datakabupaten')->name('datakabupaten');
    Route::post('/datakecamatan', 'ProfileController@datakecamatan')->name('datakecamatan');
    Route::post('/datadesa', 'ProfileController@datadesa')->name('datadesa');

    // masyarakat
    Route::get('/masyarakat/masyarakatdetail/{id}', 'PengaduanController@showMasyarakat');
    Route::get('/masyarakat', 'PengaduanController@create');
    Route::post('/masyarakat/store', 'PengaduanController@store');
    Route::get('/masyarakat/laporanku', 'PengaduanController@laporanku');
    Route::get('/masyarakat/laporanku/detaillaporanku/{id}', 'PengaduanController@detaillaporanku');
});

Route::group(['middleware' => ['auth', 'ceklevel:petugas']], function() {
    // petugas
    Route::get('/petugas/pengaduan', 'PetugasController@index')->name('pengaduan');
    Route::get('/petugas/pengaduan/detail/{id}', 'PetugasController@show');
    Route::post('/petugas/pengaduan/detail/{id}', 'TanggapanController@store');
    Route::get('/petugas/pengaduan/delete/{id}', 'PetugasController@delete');
    Route::post('/petugas/pengaduan/detail/onchange/{id}', 'PetugasController@statusOnchange')->name('petugas.statusOnchange');
    Route::get('/petugas/tanggapan', 'PetugasController@indextanggapan')->name('tanggapan');
    Route::put('/petugas/pengaduan/update/{id}', 'PetugasController@update');
});
