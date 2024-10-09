<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use Barryvdh\DomPDF\Facade\Pdf;
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


Route::get('/', [PageController::class, 'index']);
Route::get('/undangan/{uniquecode?}', [PageController::class, 'undangan']);
Route::get('/mempelai', [PageController::class, 'dashboard'])->middleware('auth');

Route::get('mempelai/tamu', [TamuController::class, 'index']);
Route::post('mempelai/tamu', [TamuController::class, 'store']);
Route::get('mempelai/tamu/edit/{id}', [TamuController::class, 'edit']);
Route::put('mempelai/tamu/{id}', [TamuController::class, 'update']);
Route::get('mempelai/tamu/delete/{id}', [TamuController::class, 'destroy']);


Route::get('mempelai/setting', [SettingController::class, 'index']);
Route::post('mempelai/setting', [SettingController::class, 'store']);
Route::get('mempelai/setting/{id}', [SettingController::class, 'edit']);
Route::put('mempelai/setting/{id}', [SettingController::class, 'update']);


require __DIR__.'/auth.php';
