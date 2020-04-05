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

//Route::get('/', function () {
//    return view('main.index');
//});
Route::get('/', function () {
    return view('dashboard.dat_ve.index');
});
Route::get('/phim', function () {
    return view('list.movie.index');
});
Route::get('/login', function () {
    return view('login.index');
})->name('login');
