<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{

    public function login(){
        return view('login.login');
    }
    public function authenticate(Request $request){
        //Validar
        $validados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //Comprobar pass 
        if (Auth::attempt($validados)){
           //si login ok regenero la seccion
           $request->session()->regenerate();
            //se redireciona a la home
            //dd('Logado correctamente');
        
            return redirect()->intended(route ("home"))
            ->withSuccess('Logado Correctamente');
        }
        //return redirect("/")->withSuccess('Los datos introducidos no son correctos');
        return back()->withErrors([
            'email' => 'Los datos ingresados no coinciden con el registro.',
        ])->onlyInput('email');
    }
    public function logout(Request $request) {

    }

}
