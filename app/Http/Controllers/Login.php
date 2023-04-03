<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function  index()
    {
        return view('components.login');
    }

    public function store(Request $request)
    {
        $credenciales = $request->validate([ 
            "email" => ['required' , 'email' , 'string'] , 
            "password"=> ['required' , 'string']
        ]);

        $recueradme = $request->filled('recuerdame');
        
        if(Auth::attempt($credenciales , $recueradme ) ){
            $request->session()->regenerate();

            return redirect('inicio');
        }

        return redirect('login')->with('login' , 'los datos ingresado son incorrectos') ;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("login");
    }
}
