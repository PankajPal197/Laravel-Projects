<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Http\Controllers\staffController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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
//     return view('home');
// });
Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::post('store', [EmployeeController::class, 'create'])->name('createpost');
Route::get('store', [EmployeeController::class, 'create'])->name('create');
Route::get('/edit/{id}', [EmployeeController::class, 'Edit'])->name('edit');
Route::post('edit', [EmployeeController::class, 'update']);
Route::get('/delete/{id}', [EmployeeController::class, 'destroy']);
Route::get('staff', [staffController::class, 'staff']);
// Route::get('display', [EmployeeController::class, 'display']);



Route::get('/getCompany', [DataController::class, 'getCompany']);
