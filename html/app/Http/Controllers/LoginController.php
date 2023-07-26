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
    //     return view('login.
    //  }

    public function login(){
        if (Auth::check()){
            return redirect()->route('dashboard');
        }else{
        return view('login.login');
        }
    }
    
    public function authenticate(Request $request){
        //Validar datos
        $validar =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
       
        //Comprobar pass 
         //if (Auth::attempt($validar)){
        //    //si login ok regenero la seccion
        //   $request->session()->regenerate();
        //     //se redireciona a la dashboard
        //     //dd('Logado correctamente');

        //     return redirect()->route('dashboard');
        
        //      //return redirect()->intended(route('dashboard'))
        //     //->withSuccess('Logado Correctamente');
        // }
        // //return redirect("/")->withSuccess('Los datos introducidos no son correctos');
        // return back()->withErrors([
        //     'email' => 'Los datos ingresados no coinciden con el registro.',
        // ])->onlyInput('email');

        if (Auth::attempt($validar)) {
            // Autenticación exitosa, regenerar la sesión y redirigir al usuario a la página de inicio
           // Auth::login(Auth::user());
            $request->session()->regenerate();
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
