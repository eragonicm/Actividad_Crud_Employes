<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
Route::redirect('/','employees');

Route::get('employees',[EmployeeController::class, 'index']);
Route::get('employees/create_employee',[EmployeeController::class, 'create_employee']);
Route::post('employees',[EmployeeController::class, 'store']);
Route::get('employees/{id}',[EmployeeController::class, 'show_employee']);
Route::get('employees/edit/{id}',[EmployeeController::class, 'edit_employee']);
Route::delete('employees/{id}',[EmployeeController::class, 'destroy']);
Route::put('employees/{id}',[EmployeeController::class, 'update']);