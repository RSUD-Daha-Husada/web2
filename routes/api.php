<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DoctorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/doctors', [DoctorController::class, 'getDoctors']);
Route::post('/doctors/add', [DoctorController::class, 'addDoctor']);
Route::post('/doctors/update', [DoctorController::class, 'updateDoctor']);
Route::post('/doctors/delete', [DoctorController::class, 'deleteDoctor']);