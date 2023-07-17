<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{
//
    //  public function index(){
    //    // Comprobamos si el usuario ya está logado
    //     if (Auth::check()){
    //         return view('dashboard');
    //     }
    //     return view('login.login');
    //  }

    public function login(){
        if (Auth::check()){
            return view('app.dashboard');
        }
        return view('login.login');
       
    }
    
    public function authenticate(Request $request){
        //Validar
        $validar =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //dd('Logado correctamente');
       
        //Comprobar pass 
        if (Auth::attempt($validar)){
           //si login ok regenero la seccion
           $request->session()->regenerate();
            //se redireciona a la dashboard
            dd('Logado correctamente');

            return redirect()->intended('dashboard');
        
             //return redirect()->intended(route('dashboard'))
            //->withSuccess('Logado Correctamente');
        }
        //return redirect("/")->withSuccess('Los datos introducidos no son correctos');
        return back()->withErrors([
            'email' => 'Los datos ingresados no coinciden con el registro.',
        ])->onlyInput('email');
    }
}
