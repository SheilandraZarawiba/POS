<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

Route::get('/user', [UserController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

// home
Route::get('/', [HomeController::class, 'index']);

// products (Prefix Category)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// User (Route Parameter)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Sales
Route::get('/sales', [SalesController::class, 'index']);

Route::get('/level', [LevelController::class, 'index']);