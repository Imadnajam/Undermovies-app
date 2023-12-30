<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\detailanimeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AdminC;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/authentification', [AuthController::class, 'index'])->name('authentification');
Route::get('/detailmovie/{id}', [MovieController::class, 'detail'])->name('detailmovie');

Route::get('/series', [SeriesController::class, 'index'])->name('series');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::post('/authentificationV', [AuthController::class, 'verif'])->name('authentification-verif');
Route::post('/authentificationA', [AuthController::class, 'addC'])->name('authentification-add');
Route::get('/films', [FilmController::class, 'getFilms'])->name('films');
Route::get('/anime', [AnimeController::class, 'getAnime'])->name('anime');
Route::get('/detailanime/{id}', [detailanimeController::class, 'detail'])->name('detailanime');

Route::get('/indexMD/{id}', [MovieController::class, 'detailI'])->name('detailmovieI');

Route::get('/watchNow/{id}', [MovieController::class, 'watchNow'])->name('watchNow');

Route::post('/change-language',[LanguageController::class, 'changeLanguage'])->name('change.language');

Route::get('/adminI',[AdminC::class, 'start'])->name('admin.index');

