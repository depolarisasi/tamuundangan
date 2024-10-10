<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UcapanController;
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

Route::get('mempelai/tamu', [TamuController::class, 'index'])->middleware('auth');
Route::post('mempelai/tamu', [TamuController::class, 'store'])->middleware('auth');
Route::get('mempelai/tamu/edit/{id}', [TamuController::class, 'edit'])->middleware('auth');
Route::put('mempelai/tamu/{id}', [TamuController::class, 'update'])->middleware('auth');
Route::get('mempelai/tamu/delete/{id}', [TamuController::class, 'destroy'])->middleware('auth');
Route::post('konfirmasi-kehadiran', [TamuController::class, 'konfirmasi_kehadiran']);


Route::get('mempelai/ucapan', [UcapanController::class, 'index'])->middleware('auth');
Route::post('kirimucapan', [UcapanController::class, 'store']);
Route::get('mempelai/ucapan/edit/{id}', [UcapanController::class, 'edit'])->middleware('auth');
Route::put('mempelai/ucapan/{id}', [UcapanController::class, 'update'])->middleware('auth');
Route::get('mempelai/ucapan/delete/{id}', [UcapanController::class, 'destroy'])->middleware('auth');

Route::post('/submit-wedding-wish', [UcapanController::class, 'submitWish'])->name('submit-wish');
Route::get('/get-wedding-wishes', [UcapanController::class, 'getWishes'])->name('get-wishes');


Route::get('mempelai/setting', [SettingController::class, 'index'])->middleware('auth');
Route::post('mempelai/setting', [SettingController::class, 'store'])->middleware('auth');
Route::get('mempelai/setting/{id}', [SettingController::class, 'edit'])->middleware('auth');
Route::put('mempelai/setting/{id}', [SettingController::class, 'update'])->middleware('auth');


require __DIR__.'/auth.php';
