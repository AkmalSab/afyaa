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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/afyaa', function () {
    return view('homepage');
});
Route::get('/hayyiba', function () {
    return view('hayyiba');
});
Route::get('/ryndu', function () {
    return view('ryndu');
});

Route::get('/ismat', function () {
    return view('ismat');
});