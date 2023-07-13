<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'dashboard'])->name('dashboard');
Route::get('/charts', [AppController::class, 'charts'])->name('charts');
Route::get('registros', [AppController::class, 'registros'])->name('registros');
// Route::get('/', [AppController::class, 'registros'])->name('registros');
