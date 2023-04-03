<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use App\Models\Estudiantes;

use Livewire\Component;

class InscribirEstudiante extends Component
{

    public $roles = '';
    public $password;
    public $password_confirmed;
    public $email;
    public $name;
    public $apellido;
    public $den;
    public $role;
    public $dni;
    public $sexo = 'masculino';

    protected $rules = [
        'name' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|min:3|email|unique:App\Models\User,email',
        'password' => 'required| string|max:255',
        'dni' =>  'required|string',
        'sexo' =>  'required|string',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.inscribir-estudiante')
            ->extends('layouts.app')
            ->section('contenido');
    }

    public function save()
    {
        $this->validate();


        Estudiantes::create([
            'name' => $this->name,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'dni' => $this->dni,
            'sexo' => $this->sexo,
        ]);
        return redirect("inscribirEstudiante")->with('mensage' , 'registro exitoso dirijace a administracion ver estudiante');
    }
}
