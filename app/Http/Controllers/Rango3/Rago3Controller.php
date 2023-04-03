<?php

namespace App\Http\Controllers\Rango3;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Rago3Controller extends Controller
{
    public function index(){
        $estudiantes = 
        User::join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('model_has_roles.role_id', 3)
            ->get();
        return view('components.vistasparalosrango3.inicio' , ['estudiantes' => $estudiantes]);
    }
    
}
