<?php

namespace App\Http\Controllers;

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

//Formulario de inscripción

// Route::get('/', [AlumnoController::class, 'index'])->name('home');

// Route::get('/formulario/registro',[AlumnoController::class,'create'])->name('registro');

Route::get('formulario', [AlumnoController::class, 'index'])->name('formulario.index');

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


 //guardo un registro
// Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'store']);
// Route::post('/logout', [LogoutController::class, 'store'])->name('logout');



// Route::controller(AlumnoController::class)->group(function(){
//     Route::get('/', [AlumnoController::class, 'index'])->name('home');
    
//     Route::get('/formulario/registro',[AlumnoController::class,'create'])->name('registro');
    
Route::post('/formulario/guardar_registro',[AlumnoController::class, 'store'])->name('guardar_registro');

    
// });
//Route::get('/','/formulario/registro');