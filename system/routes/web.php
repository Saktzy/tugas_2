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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/product', function () {
    return view('admin/shop');
});
Route::get('/chart', function () {
    return view('admin/chart');
});
Route::get('/login', function () {
    return view('admin/login');
});
Route::get('/register', function () {
    return view('admin/register');
});


