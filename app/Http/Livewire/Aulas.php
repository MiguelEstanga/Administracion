<?php

namespace App\Http\Livewire;

use App\Models\Aulas as ModelsAulas;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Aulas extends Component
{
    public $aula;
    public $placa;
    public $categoria_id = '';
    public $categorias;
    public $rules = [
        'aula' => 'required|string|max:255',
        'placa' => 'required|string|max:255',
        'categoria_id' => 'required|exists:categorias,id'
    ];
    public function mount(){
       
        $this->categorias = Categoria::all();
    }
    public function render()
    {   
        $aulas =  DB::table('categorias')->join('aulas', 'categorias.id', '=', 'aulas.categoria_id')->get();
        return view(
            'livewire.aulas',
            ['aulas' => $aulas]
        )->extends('layouts.app')->section('contenido');
    }


    public function save(){
        $this->validate();
        $aula = new ModelsAulas();
        $aula->aula = $this->aula;
        $aula->categoria_id = $this->categoria_id;
        $aula->placa = $this->placa;
        $aula->save();
        
    }

    public function delete($id){
        ModelsAulas::find($id)->delete();
    }
}
