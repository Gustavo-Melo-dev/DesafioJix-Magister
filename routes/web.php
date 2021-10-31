<?php

use App\Http\Controllers\DocumentController;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/main', [DocumentController::class, 'index']);
Route::get('/main', [DocumentController::class, 'sum']);
Route::get('/document/create', [DocumentController::class, 'create']);
Route::post('/document', [DocumentController::class, 'store']);
Route::get('/logout', [DocumentController::class, 'logout']);