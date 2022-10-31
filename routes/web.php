<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculosController;

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

Route::get('/fibo', function () {
    return view('fibo');
});

Route::post('calcularFibo', [CalculosController::class, 'fibo'])->name('fibo');

Route::get('/npalabras', function () {
    return view('npalabras');
});

Route::post('calcularPalabras', [CalculosController::class, 'npalabras'])->name('npalabras');

Route::get('/nvocales', function () {
    return view('nvocales');
});

Route::post('calcularVocales', [CalculosController::class, 'nvocales'])->name('nvocales');