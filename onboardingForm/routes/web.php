<?php

use App\Http\Controllers\Onboarding;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/onboarding',[Onboarding::class,'index'])->name('onboarding');
Route::post('/onboarding',[Onboarding::class,'index'])->name('otp.generate');
// Route::post('otp/generate', 'generate')->name('otp.generate');
