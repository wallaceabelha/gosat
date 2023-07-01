<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaCreditoController;
use App\Http\Controllers\SimulaCreditoController;
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

Route::get('/', [ConsultaCreditoController::class, 'index']);
Route::post('/consulta', [ConsultaCreditoController::class, 'store']);
Route::get('/simular_credito', [SimulaCreditoController::class, 'index']);
Route::post('/simula', [SimulaCreditoController::class, 'store']);
