<?php

namespace App\Http\Controllers;
use App\Models\alumno;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AppController extends Controller
{
      public function dashboard(Request $request){

        $totalAlumnos = Alumno::count();
        $totalMujeres = Alumno::where('genero', 'mujer')->count();
        $totalAceptados = Alumno::where('estado', 'Aceptado')->count();
        $totalPendientes = Alumno::where('estado', 'Pendiente')->count();
        $alumnos = Alumno::all();
        return view('app.dashboard', compact('totalAlumnos','totalMujeres','totalAceptados', 'totalPendientes', 'alumnos'));

    }
    public function registros()
    {
        return view('app.registros',[

        ]);
    }

    public function charts()  {
        $edades = [10, 1, 3, 15, 12, 1];
        
        $datos = [];
        $datos['edades'] = $edades;

        
        return view('app.chart', ['datos' => $datos]);
    }
}