<?php

namespace App\Http\Livewire;

use App\Models\estudiante_cursos;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PagosLiwire extends Component
{
    public $data;
    public $editar;
    function mount(){
     $this->data = DB::table('estudiante_cursos')
        ->join('estudiantes' , "estudiantes.id" , '=' , 'estudiante_cursos.estudiante_id')
        ->join('cursos' , 'cursos.id' , '=', 'estudiante_cursos.cursos_id')->get();
    }
    public function render()
    {
        return view('livewire.pagos-liwire')
        ->extends('layouts.app')
        ->section('contenido');
    }

    public function edit(){
        
    }
}
