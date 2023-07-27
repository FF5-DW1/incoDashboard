<?php

namespace App\Http\Controllers;

use App\Models\alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AlumnoController extends Controller
{
    //traer los datos
    public function index(Request $request)
    {

        $alumnos = Alumno::all();

        return view('formulario.index', compact('alumnos'));
    }

    //recibimos y guardamos datos pagina a pagina
    public function createStepOne(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-one', compact('alumno'));
    }


    public function storeStepOne(Request $request) {
       
        $validatedData = $request->validate ([
            'nombres'=>'required|max:50',
            'apellidos'=>'required|max:50',
            'email'=>'required|unique:alumnos|email|max:60',
            'dni_nie_pasaporte' =>'required|unique:alumnos|max:12|regex:/^\d{8}[a-zA-Z]$/',
            'telefono'=>'required',
            'residente' => 'required|in:si', //asegura que solo sea si o no la respuesta
       ]);

        $validatedData = $request->validate([
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'email' => 'required|unique:alumnos|email|max:60',
            'dni_nie_pasaporte' => 'required|unique:alumnos|max:12',
            'telefono' => 'required',
            'residente' => 'required',
        ]);

        if (empty($request->session()->get('alumno'))) {
            $alumno = new Alumno();
            $alumno->fill($validatedData);
            $request->session()->put('alumno', $alumno);
        } else {
            $alumno = $request->session()->get('alumno');
            $alumno->fill($validatedData);
            $request->session()->put('alumno', $alumno);
        }

        return redirect()->route('formulario.step.two');
    }


    public function createStepTwo(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-two', compact('alumno'));
    }

    public function storeStepTwo(Request $request)
    {

        $validatedData = $request->validate([
            'ciudad_residencia' => 'required',
            'pais_nacimiento' => 'required',
            'edad' => 'required',
            'genero' => 'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);

        return redirect()->route('formulario.step.three');
    }

    public function createStepThree(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-three', compact('alumno'));
    }

    public function storeStepThree(Request $request)
    {

        $validatedData = $request->validate([
            'programa_elegido' => 'required',
            'canal_captacion' => 'required',
            'situacion_profesional' => 'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);

        return redirect()->route('formulario.step.four');
    }

    public function createStepFour(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-four', compact('alumno'));
    }

    public function storeStepFour(Request $request)
    {

        $validatedData = $request->validate([
            'situacion_actual' => 'required',
            'nivel_educacion' => 'required',
            'permiso_trabajo_es' => 'required',
            'disponibilidad_ordenador' => 'required',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $request->session()->put('alumno', $alumno);

        return redirect()->route('formulario.step.five');
    }

    public function createStepFive(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.step-five', compact('alumno'));
    }

    public function storeStepFive(Request $request)
    {

        $validatedData = $request->validate([
            'disponibilidad_horaria' => 'required',
            'nivel_ingles' => 'required',
            'presentacion_breve' => 'required|max:300',
        ]);

        $alumno = $request->session()->get('alumno');
        $alumno->fill($validatedData);
        $alumno->save();

        $request->session()->forget('alumno');


        return redirect()->route('formulario.thank.you');
    }

    public function createInicio(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.inicio', compact('alumno'));
    }

    public function createThankYou(Request $request)
    {

        $alumno = $request->session()->get('alumno');

        return view('formulario.thank-you', compact('alumno'));
    }

    public function editDashboard($id)
    {
        $alumno = Alumno::find($id);
        return view('formulario.editarDashboard', compact('alumno'));
    }

    public function updateDashboard(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $validator = Validator::make($request->all(), [
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'email' => 'required|email|max:60',
            'dni_nie_pasaporte' => 'required|max:12',
            'telefono' => 'required',
            'estado' => 'required|in:pendiente,aceptado,rechazado',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $alumno->update([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'email' => $request->input('email'),
            'dni_nie_pasaporte' => $request->input('dni_nie_pasaporte'),
            'telefono' => $request->input('telefono'),
            'estado' => $request->input('estado'),
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if (!$alumno) {
            return redirect()->route('dashboard')->with('message', 'No se encontró el registro para eliminar.');
        }

        $alumno->delete();

        return redirect()->route('dashboard')->with('message', 'Registro eliminado exitosamente.');
    }
}
