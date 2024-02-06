<?php

use App\Http\Controllers\studentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [studentController::class, 'index'])->name('index');
// Route::get('/', [studentController::class, 'create']);
Route::post('/', [studentController::class, 'create']);
Route::get('/edit/{id}', [studentController::class, 'edit']);
Route::post('/update', [studentController::class, 'update']);
Route::get('/delete', [studentController::class, 'destroy']);



