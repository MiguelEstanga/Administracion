<?php

namespace App\Http\Livewire;

use App\Models\Aulas;
use App\Models\Cursos;
use Livewire\Component;

class CursosLivewire extends Component
{
    public $idcurso;
    public $nombrecurso;
    public $hora_entrada;
    public $hora_salida;
    public $inversion;
    public $aula;
    public $aulas;
    public $fecha_inicio;
    public $editar = false;
    protected $rules = [
        "nombrecurso" => 'required',
        "hora_entrada" => "required|time",
        "hora_salida " => "required|time",
        "inversion" => "required",
        "aula" => "required",
        "fecha_inicio" => 'required|date'
    ];
  
    public function render()
    {
        $this->aulas = Aulas::all();
        $cursos = Cursos::all();
        return view(
            'livewire.cursos-livewire',
            [

                'cursos' => $cursos
            ]

        )
            ->extends('layouts.app')
            ->section('contenido');
    }

    public function save()
    {
        $crearcurso = new Cursos();
        $crearcurso->nombrecurso = $this->nombrecurso;
        $crearcurso->hora_entrada = $this->hora_entrada;
        $crearcurso->hora_salida = $this->hora_salida;
        $crearcurso->precio = $this->inversion;
        $crearcurso->aula = $this->aula;
        $crearcurso->fecha_inicio = $this->fecha_inicio;
        $crearcurso->save();
        $this->reset();
    }

    public function delete($id)
    {
        Cursos::find($id)->delete();
    }
    public function editar($id)
    {
        $curso = Cursos::find($id);
        $this->nombrecurso = $curso->nombrecurso;
        $this->hora_entrada = $curso->hora_entrada;
        $this->hora_salida = $curso->hora_salida;
        $this->inversion = $curso->precio;
        $this->aula = $curso->aula;
        $this->fecha_inicio = $curso->fecha_inicio;
        $this->idcurso = $curso->id;
        $this->editar = true;
    }
  
}
