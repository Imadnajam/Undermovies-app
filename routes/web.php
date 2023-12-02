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
    return view('index');
})->name('home');
Route::get('/authentification', function () {
    return view('signup-login');
})->name('authentification');

Route::get('/detailmovie', function () {
    return view('components.detailmovie');
})->name('detailmovie');
Route::get('/series', function () {
    return view('series');
})->name('series');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/pricing', function () {
    return view('pricing-template');
})->name('pricing');