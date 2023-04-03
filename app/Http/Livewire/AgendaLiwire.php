<?php

namespace App\Http\Livewire;

use App\Models\Agenda;
use Livewire\Component;

class AgendaLiwire extends Component
{
    public $agenda;
    public $dias_sin_libre , $conceptos;

    protected $rules =[
        'dias_sin_libre' => 'required|date',
        'conceptos' => 'required|string|max:255'
    ];

    public function mount(){
       
    }

    public function render()
    {
        $this->agenda = Agenda::all();
        return view('livewire.agenda-liwire')
                ->extends('layouts.app')
                ->section('contenido');
    }
    public function delete($id){
        Agenda::find($id)->delete();
    }
    public function save(){
        $this->validate();
        Agenda::create([
            'dias_sin_libre' => $this->dias_sin_libre,
            'conceptos' => $this->conceptos
        ]);
    }
}
