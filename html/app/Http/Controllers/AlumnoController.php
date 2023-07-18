<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    //traer los datos
    public function index(Request $request){

        $alumnos = Alumno::all();

        return view('formulario.index', compact('alumnos'));

    }
    
    //recibimos y guardamos datos pagina a pagina
    public function createStepOne(Request $request) {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-one', compact('alumno'));
    }

    public function editar(Request $request)
    {
        // Validación de los campos del formulario (puedes agregar más campos si es necesario)
        $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // Agrega aquí la validación para el resto de campos que desees
        ]);

        // Si hay un campo oculto 'id' en el formulario, entonces estamos editando un perfil existente
        // De lo contrario, estamos creando un nuevo perfil
        if ($request->has('id')) {
            // Edición de perfil existente
            $alumno = alumno::findOrFail($request->input('id'));
        } else {
            // Crear nuevo perfil
            $alumno = new alumno();
        }

        // Actualizar los campos del perfil con los nuevos datos
        $alumno->nombre = $request->input('nombres');
        $alumno->apellidos = $request->input('apellidos');
        $alumno->dni_nie_pasaporte = $request->input('dni_nie_pasaporte');
        $alumno->telefono = $request->input('telefono');

        // Guardar los cambios en la base de datos
        $alumno->save();

        // Después de guardar, redirecciona a la página de perfil o a donde desees
        return redirect('/dashboard/' . $alumno->id)->with('success', 'Perfil actualizado exitosamente');
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
            'edad'=>'required',
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
      

        return redirect()->route('formulario.step-one');
    }

       
}
