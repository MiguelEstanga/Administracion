<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Cursos;
use Livewire\Component;

class Categorias extends Component
{
    //
    public $editar ;
    public $categoria;
    
    public $rules =[
        'categoria' => 'required'
    ];

    public function render()
    {
        $categoria = Categoria::all();
        return view('livewire.categorias', ['categorias' => $categoria])->extends('layouts.app')->section('contenido');
    }

    protected $listeners = ["editar" => "editar"];

    public function save()
    {
        $this->validate();
        Categoria::create([
            "categoria" => $this->categoria,
        ]);
    }
    public function delete($id){

        Categoria::find($id)->delete();
    }

    public function editar(Categoria  $id ){
        
        $this->categoria = $id;
        dd($this->editar);
    }

    public function modalshow(Categoria $id){
        dd($id);
    }
}
