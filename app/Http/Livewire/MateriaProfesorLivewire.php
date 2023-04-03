<?php

namespace App\Http\Livewire;

use App\Models\ProfesorCurso;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MateriaProfesorLivewire extends Component
{
    public $data;

    public function mount(){
        $this->data = DB::table('profesor_cursos')
        ->join('users' , "users.id" , '=' , 'profesor_cursos.profesore_id')
        ->join('cursos' , 'cursos.id' , '=', 'profesor_cursos.curso_id')->get();
    }
    public function render()
    {
        return view('livewire.materia-profesor-livewire')
            ->extends('layouts.app')
            ->section('contenido') ;
    }

    public function eliminar($id){
        
        ProfesorCurso::find($id)->delete();
    }
}
