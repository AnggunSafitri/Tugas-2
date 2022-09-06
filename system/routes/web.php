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

Route::get('/', function () {
    return view('frontview.index');
});

Route::get('/index', function () {
    return view('frontview.index');
});

Route::get('/account', function () {
    return view('frontview.account');
});

Route::get('/produkdetail', function () {
    return view('frontview.produkdetail');
});

Route::get('/produk', function () {
    return view('frontview.produk');
});

Route::get('/login', function () {
    return view('frontview.login');
});