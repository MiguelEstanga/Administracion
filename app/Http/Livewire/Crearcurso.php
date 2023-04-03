<?php

namespace App\Http\Livewire;

use App\Models\Aulas;
use App\Models\Cursos;
use Livewire\Component;

class Crearcurso extends Component
{
    public function booted()
    {
       
    }
    public function render()
    {
        $todosloscursos =  Cursos::all();
        $aula = Aulas::all();
        return view('livewire.crearcurso' , ['cursos' => $todosloscursos , 'aula' => $aula ])->extends('layouts.app')
        ->section('contenido');
    }
}
