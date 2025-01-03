<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseHoldController;

Route::get('/', function () {
    return view('welcome');
});

// Index
Route::get('/household', [HouseHoldController::class, 'index'])->name('household.index');

// Create
Route::get('/household/create', [HouseHoldController::class, 'create'])->name('household.create');
Route::post('/household', [HouseHoldController::class, 'store'])->name('household.store');

// Read
Route::get('/household/{household}/', [HouseHoldController::class, 'update'])->name('household.view');

// Update
Route::get('/household/{household}/edit', [HouseHoldController::class, 'edit'])->name('household.edit');
Route::put('/household/{household}/update', [HouseHoldController::class, 'update'])->name('household.update');

// Delete
