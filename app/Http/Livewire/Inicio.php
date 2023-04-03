<?php

namespace App\Http\Livewire;

use App\Models\Estudiantes;
use Livewire\Component;

class Inicio extends Component
{
    public $estudiante;
    public $busqueda;
    public $numeroestudiante;
    public function render()
    {
        $this->numeroestudiante = Estudiantes::all();
        $this->estudiante = Estudiantes::where("email" , 'like' ,"%", $this->busqueda ,"%")->get();
        return view('livewire.inicio')
            ->extends('layouts.app')
            ->section('contenido');
    }
}
