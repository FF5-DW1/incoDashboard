<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function dashboard()
    {
        return view('app.dashboard',[

        ]);
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

        
        return view('app.charts', ['datos' => $datos]);
    }
}