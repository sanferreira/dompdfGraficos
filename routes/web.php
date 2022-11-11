<?php

use App\Http\Controllers\RelatorioPdfController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('graficoimg', [RelatorioPdfController::class, 'imagem64']);
Route::get('graficos', [RelatorioPdfController::class, 'charts']);
Route::get('relatoriopdf',[RelatorioPdfController::class, 'index']);
Route::get('pdf',[RelatorioPdfController::class, 'pdf']);
