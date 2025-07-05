<?php

use App\Http\Controllers\{
    HomeController,
    AuthController,
    MovieController,
    SeriesController,
    AboutController,
    PricingController,
    FilmController,
    AnimeController,
    DetailAnimeController,
    LanguageController,
    AdminController,
    SeriesDetailController,
    SeriesEpisodeController,
    EpisodeTrailerController,
    SearchController,
    GetStartedController
};

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

// Content routes
Route::prefix('content')->group(function () {
    Route::get('/films', [FilmController::class, 'index'])->name('films');
    Route::get('/anime', [AnimeController::class, 'index'])->name('anime');
    Route::get('/series', [SeriesController::class, 'index'])->name('series');
});

// Movie routes
Route::prefix('movies')->group(function () {
    Route::get('/{id}', [MovieController::class, 'show'])->name('movie.show');
    Route::get('/{id}/details', [MovieController::class, 'details'])->name('movie.details');
    Route::get('/{id}/watch', [MovieController::class, 'watch'])->name('movie.watch');
});

// Anime routes
Route::prefix('anime')->group(function () {
    Route::get('/{id}', [DetailAnimeController::class, 'show'])->name('anime.show');
});

// Series routes
Route::prefix('series')->group(function () {
    Route::get('/{id}', [SeriesDetailController::class, 'show'])->name('series.show');
    Route::get('/{id}/trailer', [SeriesDetailController::class, 'trailer'])->name('series.trailer');
    Route::get('/{series_id}/season/{season_number}', [SeriesEpisodeController::class, 'episodes'])->name('series.episodes');
    Route::get('/{series_id}/season/{season_number}/episode/{episode_number}', [EpisodeTrailerController::class, 'trailer'])->name('episode.trailer');
});

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});

// Admin routes (should be protected with middleware)
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Add more admin routes here
});

// Utility routes
Route::post('/language/change', [LanguageController::class, 'change'])->name('language.change');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/get-started', [GetStartedController::class, 'sendEmail'])->name('get-started');

// API routes 
Route::prefix('api')->group(function () {

});
