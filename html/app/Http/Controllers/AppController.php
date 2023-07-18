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

        $alumnos = Alumno::all();

        return view('app.dashboard', compact('alumnos'));

    }
    public function registros()
    {
        return view('app.registros',[

        ]);
    }

    public function charts(): View
    {
        $alumnos = Alumno::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');
 
        $labels =  $alumnos->keys();
        $data =  $alumnos->values();
              
        return view('chart', compact('labels', 'data'));
    }
    // public function charts()  {
    //     $edades = [10, 1, 3, 15, 12, 1];
        
    //     $datos = [];
    //     $datos['edades'] = $edades;

        
    //     return view('app.charts', ['datos' => $datos]);
    // }
}