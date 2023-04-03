<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use App\Models\ProfesorCurso;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
class AsignarMateriaLivewire extends Component
{
    public $cursos;
    public $users;
    public $curso_id;
    public $profesor_id;
    public $h1 ='nada';
    public $rules=[
        'curso_id' => 'required'
    ];

    public function mount()
    {
        //buscamos al profesor
        $rolid = Role::where('name', "Profesores")->first()->id;
        $this->cursos = Cursos::all();
        $this->users = User::join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->where('model_has_roles.role_id', $rolid)
            ->get();
    }
    public function render()
    {
        return view('livewire.asignar-materia-livewire')
            ->extends('layouts.app')
            ->section('contenido');
    }

    public function save($id){
        $this->validate();

        
        
        $profesorcurso = new ProfesorCurso();
        $profesorcurso->curso_id = $this->curso_id;
        $profesorcurso->profesore_id  = $id;
        $profesorcurso->save();
       
        //$profesor = User::find($this->profesor_id)->name;
        $this->h1 =$id;
    }
}
