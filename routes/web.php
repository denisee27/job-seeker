<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes([
  'register' => true,
  'reset' => false,
  'verify' => false,
]);
//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

//Halaman Employee
Route::get('/jobs', [EmployeeController::class, 'index']);
Route::get('/jobs/detail/{id}', [EmployeeController::class, 'detail']);
Route::get('/employee/search', [EmployeeController::class, 'show']);

//Halaman Company
Route::get('/company', [CompanyController::class, 'index']);
Route::post('/company/store', [CompanyController::class, 'store']);



