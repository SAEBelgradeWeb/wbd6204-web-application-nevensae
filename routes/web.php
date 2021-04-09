<?php

use App\Models\Contest;
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

Route::get('/home', 'App\Http\Controllers\HomePageController@index')->name('home');


Route::get('/about', function () {
    return view('about');
})->middleware(['auth'])->name('about');

Route::get('/contact', '\App\Http\Controllers\ContactsController@show')->name('contact');
Route::post('/contact', '\App\Http\Controllers\ContactsController@store')->name('contact');

// I will need to pass the contest table to this route
Route::get('/contests', function () {
    return view('contests');
})->name('contests');

Route::get('contests/{contest}', function ($id) {
    return view('contest', ['contest'=>Contest::findOrFail($id)]);
})->name('contest');

Route::get('/submission', '\App\Http\Controllers\ArtSubmissionController@show')->name('submission');
Route::post('/submission', '\App\Http\Controllers\ArtSubmissionController@store')->name('submission');


// CMS / API ROUTES
Route::get('/cms-home', 'App\Http\Controllers\ApiHomeController@index')->name('cms-home');
Route::get('/cms-users', 'App\Http\Controllers\ApiUsersController@index')->name('cms-users');
//Route::post('/cms-users/{user}/edit', 'App\Http\Controllers\ApiUsersController@edit')->name('cms-users-edit');


require __DIR__.'/auth.php';
