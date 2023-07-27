<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return view('login.login');
        }
    }

    public function authenticate(Request $request)
    {
        //Validar datos
        $validar =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validar)) {
            // Autenticación exitosa, regenerar la sesión y redirigir al usuario a la página de inicio
            // Auth::login(Auth::user());
            $user= Auth::getUser();
            $request->session()->regenerate();

//  Comprobar el rol

// Si es Admin 
        if ($user->hasRole("Admin")){
            return redirect()->route('dashboard');
        }else {
            return redirect()->route('charts');
        }
// Redireccionar a dashboard
// Si es Coordinador
// Redireccionar a charts

            return redirect()->route('dashboard');
        } else {
            // Autenticación fallida, redirigir de nuevo al login con un mensaje de error
            return back()->withErrors([
                'email' => 'Los datos ingresados no coinciden con el registro.',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
