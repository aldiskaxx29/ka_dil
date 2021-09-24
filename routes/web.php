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
//     return view('/template_auth.login');
// });

// Route::get('/', function () {
//     return view('/template_auth.login');
// })->middleware('guest');


Route::get('/','Otentikasi\OtentikasiController@index');
Route::post('login','Otentikasi\OtentikasiController@login');
Route::get('registrasi','Otentikasi\OtentikasiController@registrasi');
Route::post('regist','Otentikasi\OtentikasiController@regist');

// Route::get('/', 'ontetkasi\OtentikasiController@index')->name('login');
// Route::post('/login', 'ontetkasi\OtentikasiController@login')->name('login');
// Route::get('/logout', 'ontetkasi\OtentikasiController@logout')->name('logout');
// Route::get('/registrasi', 'ontetkasi\OtentikasiController@registrasi')->name('registrasi');
// Route::post('/regist', 'ontetkasi\OtentikasiController@regist')->name('regist');

// Auth::routes();

//route login - logout
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth','cekLevel:PETUGAS,MASYARAKAT']], function(){

    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    // Route::get('/dashboard', function(){
    //     return view('welcome');
    // });

// });

Route::get('dashboard_user', function(){
    return  'halo';
});

// Route::group(['middleware' => 'petugas'], function(){
//     Route::get('petugas/dashboard','Petugas\DashbardPetugas@index');
// });

// Route::group(['middleware' => 'user'], function(){
//     Route::get('user/dashboard','Masyarakat\DashbardMasyarakat@index');
// });


// Route::group(['middleware' => ['auth','cekLevel:PETUGAS,USER']], function(){

//     Route::get('/dashboard','Petugas\DashboardPetugas@index')->name('dashboard');    

// });

// Route::group(['middleware' => ['auth','cekLevel:MASYARAKAT']], function(){

//     Route::get('/dashboard','Masyarakat\DashboardMasyarakat@index')->name('dashboard');    

// });

// Route::get('download_laporan/{id}','User\DashboardController@download');
Route::get('download_laporan/{id}','User\DashboardController@download');


//Petugas
Route::group(['middleware' => ['cekLogin']], function(){
    Route::get('dashboard_petugas', 'Petugas\DashboardController@index')->name('dashboard.petugas');
    Route::get('dataPengaduan','Petugas\DataPengaduanController@index')->name('dataPengaduan');
    Route::get('dataPengaduan/detail/{id}','Petugas\DataPengaduanController@show')->name('dataPengaduan.detail');
    Route::get('dataPengaduan/edit/{id}','Petugas\DataPengaduanController@edit')->name('dataPengaduan.edit');
    Route::post('dataPengaduan/update/{id}','Petugas\DataPengaduanController@update')->name('dataPengaduan.update');
    Route::get('dataPengaduan/hapus/{id}','Petugas\DataPengaduanController@destroy')->name('dataPengaduan.hapus');
    Route::post('dataPengaduan/acc/{id}','Petugas\DataPengaduanController@acc')->name('dataPengaduan.acc');
    Route::post('dataPengaduan/terima/{id}','Petugas\DataPengaduanController@terima')->name('dataPengaduan.terima');
    Route::post('dataPengaduan/tolak/{id}','Petugas\DataPengaduanController@tolak')->name('dataPengaduan.tolak');

    Route::get('dataUser','Petugas\DataUserController@index');
    Route::get('dataUser_petugas','Petugas\DataUserController@petugas')->name('dataUser_petugas');    
    Route::post('inputUser_petugas','Petugas\DataUserController@inputPetugas');
    Route::get('detailUser_petugas/{id}','Petugas\DataUserController@detail');
    Route::post('editUser_petugas/{id}','Petugas\DataUserController@editPetugas');
    Route::get('hapusUser_petugas/{id}','Petugas\DataUserController@hapusPetugas');

    Route::get('dataUser_user','Petugas\DataUserController@user');
    Route::post('inputUser_user','Petugas\DataUserController@inputUser');
    Route::post('editUser_user/{id}','Petugas\DataUserController@editUser');
    Route::get('hapusUser_user/{id}','Petugas\DataUserController@hapusUser');

    Route::get('laporan_pengaduan','Petugas\LaporanPengaduanController@index');
    Route::post('filter_laporanPengaduan','Petugas\LaporanPengaduanController@filterLaporan')->name('filterLaporan');




    //User / Masyarakat
    Route::get('dashboard_user', 'User\DashboardController@index')->name('dashboard.user');

    Route::get('inputPengaduan_user','User\InputPengaduanController@index')->name('inputPengaduan.user');
    Route::post('inputPengaduanForm','User\InputPengaduanController@store')->name('inputPengaduanForm');

    
    Route::get('editPengaduan_user/{id}/edit','User\InputPengaduanController@edit')->name('editPengaduan.user');
    Route::patch('updatePengaduan_user/{id}/update','User\InputPengaduanController@update')->name('updatePengaduan.user');
    Route::get('hapusPengaduan_user/{id}/hapus','User\InputPengaduanController@destroy')->name('hapusPengaduan.user');

    Route::get('status_Pengaduan','User\StatusPengaduanController@index')->name('status_Pengaduan.user');
    Route::get('detailPengaduan/{id}/detail','User\StatusPengaduanController@show')->name('detailPengaduan.user');
    Route::get('editPengaduan/{id}/edit','User\StatusPengaduanController@edit')->name('editlPengaduan.user');
    Route::post('updatePengaduan/{id}/update','User\StatusPengaduanController@update')->name('updatePengaduan.user');

    Route::get('histortPengaduan','User\HistoryController@index')->name('history_Pengaduan.user');

});
