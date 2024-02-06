<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('phone-auth', [PhoneAuthController::class, 'index']);
Route::post('phone-auth', [PhoneAuthController::class, 'store']);
// Route::post('store-onboard', [PhoneAuthController::class, 'store']);
