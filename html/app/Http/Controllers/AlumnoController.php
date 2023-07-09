<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;
#use Illuminate\Validation\Rules\Exists;
#use Symfony\Contracts\Service\Attribute\Required;

class AlumnoController extends Controller
{
    //traer los datos
    public function index(Request $request){
        $alumno = alumno::orderBy('updated_at','DESC')->get();
        return view('formulario.index', ['alumnos' => $alumno]);
        #dump('$alumno');
          //return view('formulario.registro');
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
            'nombres'=>'required|max:50',
            'apellidos'=>'required|max:50',
            'email'=>'required|unique:users|email|max:60',
            'dni_nie_pasaporte' =>'required|unique:users|email|max:12',
            'telefono'=>'required',
            'residente'=>'required',
            'ciudad_residencia'=>'required',
            'pais_nacimiento'=>'required',
            'rango_edad'=>'required',
            'genero'=>'required',
            'programa_elegido'=>'required',
            'canal_captacion'=>'required',
            'situacion_profesional'=>'required',
            'situacion_actual'=>'required',
            'nivel_educacion'=>'required',
            'permiso_trabajo_Es'=>'required',
            'disponibilidad_ordenador'=>'required',
            'disponibilidad_horaria'=>'required',
            'nivel_ingles'=>'required',
            'presentacion_breve'=>'required|max:300'
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
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'dni_nie_pasaporte' => $request->dni_nie_pasaporte,
            'telefono' =>$request->telefono,
            'residente'=>$request->residente,
            'ciudad_residencia'=>$request->ciudad_residencia,
            'pais_nacimiento'=>$request->pais_nacimiento,
            'rango_edad'=>$request->rango_edad,
            'genero'=>$request->genero,
            'programa_elegido' =>$request->programa_elegido,
            'canal_captacion'=>$request->canal_captacion,
            'situacion_profesional'=>$request->situacion_profesional,
            'situacion_actual'=>$request->situacion_actual,
            'nivel_educacion'=>$request->nivel_educacion,
            'permiso_trabajo_Es'=>$request->permiso_trabajo_Es,
            'disponibilidad_ordenador'=>$request->disponibilidad_ordenador,
            'disponibilidad_horaria'=>$request->disponibilidad_horaria,
            'nivel_ingles'=>$request->nivel_ingles,
            'presentacion_breve'=> $request->presentacion_breve
        ]);
        
        return redirect()->route('home');  
        //return redirect('/formulario.registro')->with('success', 'Alumno guardado correctamente');
        //dump('Alumno guardado correctamente');


      

    }
}
