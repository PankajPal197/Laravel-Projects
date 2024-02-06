<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
Route::get('/',[StoreController::class,'Index'])->name('indexpage');
Route::get('/store',[StoreController::class,'StoreData'])->name('store');
Route::post('/collect', [StoreController::class, 'getdata']);
Route::view('upload','login');
Route::post('/upload', [StoreController::class, 'fileupload']);
Route::view('/profile', 'profile');
