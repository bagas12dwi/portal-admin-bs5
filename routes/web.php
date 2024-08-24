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
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/docs', function () {
    return view('pages.docs');
})->name('docs');
Route::get('/orders', function () {
    return view('pages.orders');
})->name('orders');
Route::get('/notification', function () {
    return view('pages.notification');
})->name('notification');
Route::get('/account', function () {
    return view('pages.account');
})->name('account');
Route::get('/setting', function () {
    return view('pages.setting');
})->name('setting');
Route::get('/chart', function () {
    return view('pages.chart');
})->name('chart');
Route::get('/help', function () {
    return view('pages.help');
})->name('help');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/404', function () {
    return view('auth.404');
})->name('404');
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');
