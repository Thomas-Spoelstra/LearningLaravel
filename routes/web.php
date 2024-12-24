<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseHoldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/household', [HouseHoldController::class, 'index'])->name('household.index');
Route::get('/household/create', [HouseHoldController::class, 'create'])->name('household.create');
Route::post('/household', [HouseHoldController::class, 'update'])->name('household.update');
