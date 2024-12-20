<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeVideosController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');
});
// Route::get('/anime', function () {
//     return view('anime');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/catalog', [GenreController::class, 'index'])->name('сatalog');
Route::get('/catalog', [CatalogController::class, 'index'])->name('сatalog');
Route::get('/catalog', [MyController::class, 'index']);
Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime');
// Route::get('/anime/{id}', [AnimeVideosController::class, 'show'])->name('anime');
// Route::get('/anime/{id}', 'AnimeController@show')->name('anime.show');
// Route::get('images/{image}', 'ImageController@show')->name('image.show');
require __DIR__.'/auth.php';
