<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Calendarivista extends Component
{
    public $agenda;
    public $estudiante;
    public $cursos;
    public function mount(){
        $curso = Cursos::all();
        $this->cursos = $curso;
        foreach($curso as $agenda){
            $this->agenda[]=  [
                "title" => $agenda->nombrecurso,
                'start' => $agenda->fecha_inicio .' ' .$agenda->hora_entrada,
                'end' => $agenda->fecha_inicio . ' '.$agenda->hora_salida
            ];
        }
    }
    public function render()
    {
        return view('livewire.calendarivista')
            ->extends('layouts.app')
            ->section('contenido');
    }
}
