<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/items/create', [ItemController::class, 'create'])->name('items.create'); 
Route::get('/help', [HelpController::class, 'index'])->name('help');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::resource('locations', LocationController::class);
Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);
Route::resource('rentals', RentalController::class);
Route::resource('users', UserController::class);


