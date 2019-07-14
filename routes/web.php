<?php

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

Route::post('/check','CheckController@check')->name('check');

Route::get('/homeadmin', function () {
    return view('admin.homeadmin');
});

Route::get('/tambahhibah', function () {
    return view('admin.tambahhibah');
});

Route::get('/jenishibah', function () {
    return view('admin.jenishibah');
});

Route::get('/editjenishibah', function () {
    return view('admin.editjenishibah');
});

Route::get('/hibah', function () {
    return view('admin.hibah');
});

Route::get('/edithibah', function () {
    return view('admin.edithibah');
});

Route::get('/pengajuanproposal', function () {
    return view('admin.pengajuan.pengajuanproposal');
});

Route::get('/perbaikanproposal', function () {
    return view('admin.pengajuan.perbaikanproposal');
});

Route::get('/uploadpks', function () {
    return view('admin.pengajuan.uploadpks');
});

Route::get('/uploadfilepks', function () {
    return view('admin.pengajuan.uploadfilepks');
});

Route::get('/pengaturan', function () {
    return view('admin.pengaturan');
});







Route::get('/homepagedosen', function () {
    return view('dosen.homepagedosen');
});
Route::get('/mendaftarhibah', function () {
    return view('dosen.daftarhibah');
});
Route::get('/pengajuanproposaldosen', function () {
    return view('dosen.pengajuanproposal');
});
Route::get('/perbaikanproposaldosen', function () {
    return view('dosen.perbaikanproposal');
});
Route::get('/downloadpksdosen', function () {
    return view('dosen.downloadpks');
});
Route::get('/laporankemajuandosen', function () {
    return view('dosen.laporankemajuan');
});
Route::get('/laporanakhirdosen', function () {
    return view('dosen.laporanakhir');
});

Route::get('/uploadperbaikandosen', function () {
    return view('dosen.uploadperbaikan');
});
Route::get('/uploadlaporankemajuandosen', function () {
    return view('dosen.uploadlaporankemajuan');
});
Route::get('/downloadbap', function () {
    return view('dosen.downloadbap');
});





Route::get('/homepagereviewer', function () {
    return view('reviewer.homepagereviewer');
});

Route::get('/nilaiperbaikan', function () {
    return view('reviewer.nilaiperbaikan');
});
Route::get('/laporankemajuanreviewer', function () {
    return view('reviewer.laporankemajuanreviewer');
});

Route::get('/formnilaipengajuan', function () {
    return view('reviewer.formnilaipengajuan');
});

Route::get('/formnilaiperbaikan', function () {
    return view('reviewer.formnilaiperbaikan');
});
Route::get('/formnilaikemajuan', function () {
    return view('reviewer.formnilaikemajuan');
});





Route::get('/homepagekaprodi', function () {
    return view('kaprodi.homepagekaprodi');
});





Route::get('/homepageph', function () {
    return view('ph.homepageph');
});
Route::get('/laporanakhirph', function () {
    return view('ph.laporanakhirph');
});
Route::get('/laporankemajuanph', function () {
    return view('ph.laporankemajuan');
});
Route::get('/downloadlaporankemajuanph', function () {
    return view('ph.downloadlaporankemajuanph');
});
Route::get('/uploadlaporanakhirph', function () {
    return view('ph.uploadlaporanakhirph');
});
