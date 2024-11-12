<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 


Route::get('/search', [RecipeController::class, 'search'])->name('search'); 


Route::post('/random-recipe', [RecipeController::class, 'getRandomRecipe']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('kategori', KategoriController::class);
Route::resource('resep', ResepController::class);
Route::resource('bahan', BahanController::class);
Route::get('/about', function () {
    return view('about');})->name('about');


    