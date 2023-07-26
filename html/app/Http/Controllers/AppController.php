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

    public function charts()  {

        $totalAlumnos = Alumno::count();
        $totalMujeres = Alumno::where('genero', 'mujer')->count();
        $totalAceptados = Alumno::where('estado', 'Aceptado')->count();
        $totalPendientes = Alumno::where('estado', 'Pendiente')->count();
        $alumnos = Alumno::all();

        $alumnos = alumno::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();
        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#8BC34A', '#FF5722', '#009688', '#795548'];

        for ($i=1; $i <= 12; $i++) {
            $month = date('F',mktime(0,0,0,$i,1));
            $count = 0;

            foreach($alumnos as $alumno) {
                if($alumno->month == $i) {
                    $count = $alumno->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' =>'Users',
                'data' => $data,
                'backgroundColor' => $colors
            ]
            ];
        
        return view('app.chart', compact('totalAlumnos','totalMujeres','totalAceptados', 'totalPendientes', 'alumnos', 'datasets', 'labels'));
    }
}