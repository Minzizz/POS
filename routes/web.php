<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('product')->group(function () {
    Route::get('/category/food-beverage', [CategoryController::class, 'foodBeverage'])->name('category.foodBeverage');

    Route::get('/category/beauty-health', [CategoryController::class, 'beautyHealth'])->name('category.beautyHealth');

    Route::get('/category/home-care', [CategoryController::class, 'homeCare'])->name('category.homeCare');

    Route::get('/category/baby-kid', [CategoryController::class, 'babyKid'])->name('category.babyKid');
});

Route::get('/user/{userID}/name/{name}', function ($userID, $name) {
    return "<h1 style='text-align: center;'>User ID: $userID, Name: $name</h1>";
})->name('userPage');