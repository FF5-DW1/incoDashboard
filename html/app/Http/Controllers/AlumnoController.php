<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;
use Symfony\Contracts\Service\Attribute\Required;

class AlumnoController extends Controller
{
    //traer los datos
    public function index(Request $request){
        //$alumno = alumno::where(alumno_id,1)->get();
        $alumno = alumno::orderBy('updated_at','DESC')->get();
        return view('formulario.index', ['alumno' => $alumno]);
        //dd($alumno->toArray());


    }
    
    //Muestra el formulario para crear un nuevo recurso.
    public function create(Request $request){
        //devolver una vista
        return view('formulario.registro');
    }
// Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request){
        //Validar
        $request->validate([
            //'user_id'=> 'required|exists:user.id',
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'email' => 'required|max:100',
            'telefono' => 'required',
            'programa' =>'required',
            'cprograma'=>'required',
            'vivesE'=>'required',
            'fnacimiento'=>'required',
            'residencia'=>'required',
            'pnacimiento'=>'required',
            'sprofesional'=>'required',
            'situacion'=>'required',
            'neducacion'=>'required',
            'permisoTrabajo'=>'required',
            'tienes_ordenador'=>'required',
            'cingles'=>'required',
            'disponibilidad'=>'required',

        ]);

        //otra forma de guardar datos en la BD
        //$alumno = new alumno();
        #$alumno->user_id = 1;
        //$alumno->nombre = $request->nombre;
        //$alumno->apellido = $request->apellido;
        //$alumno->email = $request->email;
        //$alumno->telefono = $request->telefono;
        //$alumno->save();

        $alumno = alumno::create([
        //si pongo este codigo tengo que:en app/models/alumno, poner este codigo:protected $fillable = ['nombre', 'apellido', 'telefono']; 
        //'user_id'=>1,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'programa' =>$request->programa,
            'cprograma'=>$request->cprograma,
            'vivesE'=>$request->residencia,
            'fnacimiento'=>$request->fnacimiento,
            'residencia'=>$request->recidencia,
            'pnacimiento'=>$request->pnacimiento,
            'sprofesional'=>$request->sprofesional,
            'situacion'=>$request->situacion,
            'neducacion'=>$request->neducacion,
            'permisoTrabajo'=>$request->permisoTrabajo,
            'tienes_ordenador'=>$request->tienes_ordenador,
            'cingles'=>$request->cingles,
            'disponibilidad'=>$request->disponibilidad,

 
        ]);
        
        //return redirect()->route('home');  
        //return redirect('/formulario.registro')->with('success', 'Alumno guardado correctamente');
        //dump('Alumno guardado correctamente');


      

    }
}
