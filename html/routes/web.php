<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChartsController;
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


Route::get('/',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'authenticate']);


//Formulario de inscripción

Route::get('formulario/step-one', [AlumnoController::class, 'createStepOne'])->name('formulario.step.one');
Route::post('formulario/step-one', [AlumnoController::class, 'storeStepOne'])->name('formulario.step.one.store');

Route::get('formulario/step-two', [AlumnoController::class, 'createStepTwo'])->name('formulario.step.two');
Route::post('formulario/step-two', [AlumnoController::class, 'storeStepTwo'])->name('formulario.step.two.store');

Route::get('formulario/step-three', [AlumnoController::class, 'createStepThree'])->name('formulario.step.three');
Route::post('formulario/step-three', [AlumnoController::class, 'storeStepThree'])->name('formulario.step.three.store');

Route::get('formulario/step-four', [AlumnoController::class, 'createStepFour'])->name('formulario.step.four');
Route::post('formulario/step-four', [AlumnoController::class, 'storeStepFour'])->name('formulario.step.four.store');

Route::get('formulario/step-five', [AlumnoController::class, 'createStepFive'])->name('formulario.step.five');
Route::post('formulario/step-five', [AlumnoController::class, 'storeStepFive'])->name('formulario.step.five.store');
    
Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro');

// Dashboard routes
Route::get('app/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
Route::get('app/registros', [AppController::class, 'registros'])->name('registros');
Route::get('app/charts', [AppController::class, 'charts'])->name('charts');
Route::get('formulario/index', [AlumnoController::class, 'index'])->name('formulario.index');
Route::post('formulario/index', [AlumnoController::class, 'index'])->name('formulario.index');

Route::put('/formulario/{id}', 'FormularioController@update')->name('formulario.update');



//rutas:
//login administradores
//logout administradores
//dashboard/principal
//Dashboard/registros
//dashboard/graficos
//dashboard para usuario invitado

//rutas:
//formulario/inicio
//formulario/paso-uno
//formulario/paso-dos
//formulario/paso-tres
//formulario/paso-cuatro
//formulario/paso-cinco
