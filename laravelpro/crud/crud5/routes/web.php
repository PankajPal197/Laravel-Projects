<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SingerController;
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
Route::get('add_Song', [SongController::class, 'Add_Songs']);
Route::get('add_Singer', [SingerController::class, 'Add_Singer']);
// Route::get('show_Singer/{id}', [SingerController::class, 'Show_Singer']);
