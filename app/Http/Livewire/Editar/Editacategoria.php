<?php

namespace App\Http\Livewire\Editar;

use Livewire\Component;

class Editacategoria extends Component
{
    public function render()
    {
        return view('livewire.editar.editacategoria')->extends('layauts.app')->section('contenido');
    }
}
