<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AlumnoController::class, 'index'])->name('home');

# Route::get('/registro', [UserController::class, 'create'])->name('registro');
#Route::post('/guardar_registro', [UserController::class, 'store'])->name('guardar_registro');
//primer formulario
//creo un registro
Route::get('/formulario/registro',[AlumnoController::class,  'create'])->name('registro');
//guardo un registro
Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro');


//segundo formulario
//creo un registro
//Route::get('/formulario/registro',[AlumnoController::class,  'create'])->name('registro2');
//guardo un registro
//Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro2');
