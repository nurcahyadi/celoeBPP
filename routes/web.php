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
