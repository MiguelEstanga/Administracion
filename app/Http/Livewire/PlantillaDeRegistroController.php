<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class PlantillaDeRegistroController extends Component
{

    public $password;
    public $password_confirmed;
    public $email;
    public $name;
    public $apellido;
    public $den;
    public $roles;
    public $role;
    public $dni;
    public $sexo = 'masculino';

    protected $rules = [
        'name' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'email' => 'required|min:3|email|unique:App\Models\Estudiantes,email',
        'password' => 'required| string|max:255',
        'dni' =>  'required|string|unique:App\Models\Estudiantes,dni',
        'sexo' =>  'required|string',
        'role' =>  'required|string'
    ];

    public function mount()
    {
        $this->roles =  Role::all();
    }
    public function render()
    {


        return view('livewire.plantilla-de-registro-controller')
            ->extends('layouts.app')
            ->section('contenido');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();
        $validacion = DB::table("users")->where("email", '=', $this->email)->first();
        if (count($validacion) > 0) {
            return redirect('plantilladeregistro')->with("mensage", 'este correo ya existe en la base de datos');
        }



        $user =  User::create([
            'name' => $this->name,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'dni' => $this->dni,
            'sexo' => $this->sexo,
        ]);

        User::find($user->id)->assignRole($this->roles);
        $this->reset();
        return redirect('plantilladeregistro')->with("mensage", 'resulatodo exitoso valla a administracion todos los profesores');
    }
}
