<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    //traer los datos
    public function index(Request $request){

        $alumno = alumno::orderBy('updated_at','DESC')->get();

        return view('formulario.index', compact('alumno'));

            // return view('formulario.index', ['alumnos' => $alumno]);
        #dump('$alumno');
          //return view('formulario.registro');
    }
    
    //recibimos y guardamos datos pagina a pagina
    public function createStepOne(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-one', compact('alumno'));
    }

    public function storeStepOne(Request $request) {
       
        $validatedData = $request->validate ([
            'nombres'=>'required|max:50',
            'apellidos'=>'required|max:50',
            'email'=>'required|unique:alumnos|email|max:60',
            'dni_nie_pasaporte' =>'required|unique:alumnos|max:12',
            'telefono'=>'required',
            'residente'=>'required',
       ]);

        if(empty($request->session()->get('alumno'))) {
            $alumno = new Alumno();
            $alumno->fill($validatedData);
            $request->session()->put('alumno', $alumno);
        }else{
            $alumno = $request->session()->get('alumno');
            $alumno->fill($validatedData);
            $request->session()->put('alumno', $alumno);
        }

        return redirect()->route('formulario.step.two');
    }


    public function createStepTwo(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-two', compact('alumno'));
    }

    public function storeStepTwo(Request $request) {
        
        $validatedData = $request->validate ([
            'ciudad_residencia'=>'required',
            'pais_nacimiento'=>'required',
            'rango_edad'=>'required',
            'genero'=>'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);
       
        // if(empty($request->session()->get('alumno'))) {
        //     $alumno = new Alumno();
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }else{
        //     $alumno = $request->session()->get('alumno');
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }

        return redirect()->route('formulario.step.three');
    }

    public function createStepThree(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-three', compact('alumno'));
    }

    public function storeStepThree(Request $request) {
        
        $validatedData = $request->validate ([
            'programa_elegido'=>'required',
            'canal_captacion'=>'required',
            'situacion_profesional'=>'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);

        // if(empty($request->session()->get('alumno'))) {
        //     $alumno = new Alumno();
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }else{
        //     $alumno = $request->session()->get('alumno');
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }

        return redirect()->route('formulario.step.four');
    }

    public function createStepFour(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-four', compact('alumno'));
    }

    public function storeStepFour(Request $request) {
        
        $validatedData = $request->validate ([
            'situacion_actual'=>'required',
            'nivel_educacion'=>'required',
            'permiso_trabajo_es'=>'required',
            'disponibilidad_ordenador'=>'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);

        // if(empty($request->session()->get('alumno'))) {
        //     $alumno = new Alumno();
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }else{
        //     $alumno = $request->session()->get('alumno');
        //     $alumno->fill($validatedData);
        //     $request->session()->put('alumno', $alumno);
        // }

        return redirect()->route('formulario.step.five');
    }

    public function createStepFive(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-five', compact('alumno'));
    }

    public function storeStepFive(Request $request) {
        
        $validatedData = $request->validate ([
            'disponibilidad_horaria'=>'required',
            'nivel_ingles'=>'required',
            'presentacion_breve'=>'required|max:300',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $alumno->save();

        $request->session()->forget('alumno');
      

        return redirect()->route('formulario.step.one');
    }
       
}


 // $alumno = $request->session()->get('alumno');
    // $alumno->save();

    // $request->session()->forget('alumno');

    // return redirect()->route('formulario.index');


    // public function createStepFour(Request $request) {

    //     $alumno = $request->session()->get('alumno');

    //     return view('formulario.step-four-form', compact('alumno'));
    // }

    // public function storeCreateStepFour(Request $request) {
        
    //     $validatedData = $request->validate ([
    //         'situacion_actual'=>'required',
    //         'nivel_educacion'=>'required',
    //         'permiso_trabajo_es'=>'required',
    //         'disponibilidad_ordenador'=>'required',
    //     ]);

    //     if(empty($request->session()->get('alumno'))) {
    //         $alumno = new Alumno();
    //         $alumno->fill($validatedData);
    //         $request->session()->put('alumno', $alumno);
    //     }else{
    //         $alumno = $request->session()->get('alumno');
    //         $alumno->fill($validatedData);
    //         $request->session()->put('alumno', $alumno);
    //     }

    //     return view('formulario.step-five-form', compact('alumno'));
    // }

    // public function createStepFive(Request $request) {

    //     $alumno = $request->session()->get('alumno');

    //     return view('formulario.step-five-form', compact('alumno'));
    // }

    // public function storeCreateStepFive(Request $request) {
        
    //     $validatedData = $request->validate ([
    //         'disponibilidad_horaria'=>'required',
    //         'nivel_ingles'=>'required',
    //         'presentacion_breve'=>'required|max:300',
    //     ]);

    //     if(empty($request->session()->get('alumno'))) {
    //         $alumno = new Alumno();
    //         $alumno->fill($validatedData);
    //         $request->session()->put('alumno', $alumno);
    //     }else{
    //         $alumno = $request->session()->get('alumno');
    //         $alumno->fill($validatedData);
    //         $request->session()->put('alumno', $alumno);
    //     }

    //     return redirect()->route('index');
    // }



// Almacene un recurso recién creado en el almacenamiento.
    // public function store(Request $request){
    //     $request->validate([
    //         'nombres'=>'required|max:50',
    //         'apellidos'=>'required|max:50',
    //         'email'=>'required|unique:users|email|max:60',
    //         'dni_nie_pasaporte' =>'required|max:12',
    //         'telefono'=>'required',
    //         'residente'=>'required',
    //         'ciudad_residencia'=>'required',
    //         'pais_nacimiento'=>'required',
    //         'rango_edad'=>'required',
    //         'genero'=>'required',
    //         'programa_elegido'=>'required',
    //         'canal_captacion'=>'required',
    //         'situacion_profesional'=>'required',
    //         'situacion_actual'=>'required',
    //         'nivel_educacion'=>'required',
    //         'permiso_trabajo_es'=>'required',
    //         'disponibilidad_ordenador'=>'required',
    //         'disponibilidad_horaria'=>'required',
    //         'nivel_ingles'=>'required',
    //         'presentacion_breve'=>'required|max:300'
    //     ]);

        //otra forma de guardar datos en la BD
        //$alumno = new alumno();
        #$alumno->user_id = 1;
        //$alumno->nombre = $request->nombre;
        //$alumno->apellido = $request->apellido;
        //$alumno->email = $request->email;
        //$alumno->telefono = $request->telefono;
        //$alumno->save();

        // $alumno = alumno::create([
    
        //     'nombres' => $request->nombres,
        //     'apellidos' => $request->apellidos,
        //     'email' => $request->email,
        //     'dni_nie_pasaporte' => $request->dni_nie_pasaporte,
        //     'telefono' =>$request->telefono,
        //     'residente'=>$request->residente,
        //     'ciudad_residencia'=>$request->ciudad_residencia,
        //     'pais_nacimiento'=>$request->pais_nacimiento,
        //     'rango_edad'=>$request->rango_edad,
        //     'genero'=>$request->genero,
        //     'programa_elegido' =>$request->programa_elegido,
        //     'canal_captacion'=>$request->canal_captacion,
        //     'situacion_profesional'=>$request->situacion_profesional,
        //     'situacion_actual'=>$request->situacion_actual,
        //     'nivel_educacion'=>$request->nivel_educacion,
        //     'permiso_trabajo_es'=>$request->permiso_trabajo_es,
        //     'disponibilidad_ordenador'=>$request->disponibilidad_ordenador,
        //     'disponibilidad_horaria'=>$request->disponibilidad_horaria,
        //     'nivel_ingles'=>$request->nivel_ingles,
        //     'presentacion_breve'=> $request->presentacion_breve
        // ]);
        
        // return redirect()->route('home');  
      


      



