<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('add-customer', [CustomerController::class, 'add_customer']);
Route::get('show/{id}', [CustomerController::class, 'Show_Mobile']);
Route::get('form', [CustomerController::class, 'Form'])->name('registration form');
