<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
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

Route::controller(AlumnoController::class)->group(function(){
    Route::get('/', [AlumnoController::class, 'index'])->name('home');
    //creo un registro
    Route::get('/formulario/registro',[AlumnoController::class,  'create'])->name('registro');
    //guardo un registro
    Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro');

    //Route::get('/','/formulario/registro');
});


Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'authenticate']);