<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VistaProfesor extends Component
{
    public $materias;
    public $usuario;
    public function render()
    {
        $this->usuario = Auth::user();
        return view('livewire.vista-profesor')
        ->extends("layouts.app")
        ->section('contenido');
    }
}
