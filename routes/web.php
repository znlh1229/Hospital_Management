<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

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


Route::get('/', [HomeController::class, 'index']);


Route::get('/home', [HomeController::class, 'redirect']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctors', [AdminController::class, 'add_doctor_store']);

Route::post('/upload_doctor', [AdminController::class, 'upload_doctor']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/show_appointment', [HomeController::class, 'show_appointment']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);

Route::get('/check_appointment', [AdminController::class, 'check_appointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/cancel/{id}', [AdminControllerController::class, 'cancel']);

Route::get('/doctor_list', [DoctorController::class, 'doctor_list']);

Route::get('/delete_doctor/{id}', [DoctorController::class, 'delete_doctor']);
