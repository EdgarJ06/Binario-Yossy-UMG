<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TraductorController;

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

Route::get('/inicio', function () {
    return view('layout.app');
});

Route::get('/home', [TraductorController::class, 'index'])->name('home');
Route::get('/form-texto', [TraductorController::class, 'showTexto'])->name('form-texto');
Route::get('/form-binario', [TraductorController::class, 'showBinario'])->name('form-binario');
Route::match(['get', 'post'],'/texto', [TraductorController::class, 'textoBinario'])->name('textoBinario');
Route::match(['get', 'post'],'/binario', [TraductorController::class, 'binarioTexto'])->name('binarioTexto');
