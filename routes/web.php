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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Use the auth to authenticate the admin to access the CMS
Route::get('/new-route', function () {
    return view('new-route');
})->middleware(['auth'])->name('new-route');

Route::get('/home-page', function () {
    return view('home-page');
})->middleware(['auth'])->name('home-page');

Route::get('/about-page', function () {
    return view('about-page');
})->middleware(['auth'])->name('about-page');

Route::get('/contact-page', function () {
    return view('contact-page');
})->middleware(['auth'])->name('contact-page');

Route::get('/contest-page', function () {
    return view('contest-page');
})->middleware(['auth'])->name('contest-page');

require __DIR__.'/auth.php';
