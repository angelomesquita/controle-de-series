<?php

use App\Http\Controllers\SeriesController;
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

Route::get('/series', [SeriesController::class, 'listar']); 
Route::post('/series', [SeriesController::class, 'criar']); 
Route::put('/series', [SeriesController::class, 'atualizar']); 
Route::delete('/series', [SeriesController::class, 'deletar']); 
