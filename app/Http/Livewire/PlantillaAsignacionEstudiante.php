<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use App\Models\estudiante_cursos;
use App\Models\Estudiantes;
use Livewire\Component;

class PlantillaAsignacionEstudiante extends Component
{
    public $alert = '';
    public $asignar;
    public $nombrecurso;
    public $precio = 0;
    public $curso_id;
    public $email;
    public $pago;
    public $observacion;

    public $cursos;
    protected $rule =[
        'precio' => 'required',
        'curso_id' => 'required'
    ];
    public function mount(){
      
    }

   
    public function render()
    {  $this->cursos = Cursos::all();
        return view('livewire.plantilla-asignacion-estudiante')->extends('layouts.app')
        ->section('contenido');
    }
    public  function save(){
        
    
        $estudiante =  Estudiantes::where('email', '=', $this->email)->first(); 
        $cursos = Cursos::find($this->curso_id);
         $deuda = $cursos ->precio - $this->pago;
        if (!isset($estudiante)) {
            return redirect('plantilla')->with('warningestudiante', 'verifique que el estudiante este inscrito en la plataforma');
        }

        estudiante_cursos::create([
            'Deuda' => $deuda,
            'estudiante_id' => $estudiante->id,
            'cursos_id' => $cursos->id,
            'observacion' => $this->observacion

        ]) ;
         $this->reset();   
         $this->alert = 'listo';   
        
    }
    public function modal($id){
        $this->asignar = Cursos::find($id);
        $this->precio = $this->asignar->precio;
        $this->curso_id = $id;
        $this->pago = $this->asignar->precio;
        $this->nombrecurso = $this->asignar->nombrecurso;
         
    }
}
