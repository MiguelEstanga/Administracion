<?php

namespace App\Http\Livewire;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class GestionarUsuariosLivewire extends Component
{
    public $usuarios;

    public function mount()
    {
        $this->usuarios =  User::join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('users.id', '<>', 1)
            ->get();
    }
    
    public function render()
    {
        return view('livewire.gestionar-usuarios-livewire')
            ->extends('layouts.app')
            ->section('contenido');
    }

    public function update(Request $request ,  $id){
       
    }
}
