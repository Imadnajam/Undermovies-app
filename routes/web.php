<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PricingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/authentification', [AuthController::class, 'index'])->name('authentification');
Route::get('/detailmovie', [MovieController::class, 'detail'])->name('detailmovie');
Route::get('/series', [SeriesController::class, 'index'])->name('series');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::post('/authentificationV', [AuthController::class, 'verif'])->name('authentification-verif');
Route::post('/authentificationA', [AuthController::class, 'addC'])->name('authentification-add');
