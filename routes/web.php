<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/categoris', function () {
    return view('categoris.index');
});
Route::get('/order', function () {
    return view('order.index');
});
Route::get('/produc', function () {
    return view('produc.index');
});
Route::get('/user', function () {
    return view('user.index');
});
Route::get('/login', function () {
    return view('login');
});