<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/eua', [App\Http\Controllers\IndexController::class, 'indexEUA'])->name('indexEUA');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas para alterar planos
Route::post('/admin/planos/store', [App\Http\Controllers\InformacoesController::class, 'storePlanos'])->name('admin.alterarInfos.storePlanos');
Route::put('/admin/planos/update', [App\Http\Controllers\InformacoesController::class, 'updatePlanos'])->name('admin.alterarInfos.updatePlanos');
