@extends('layouts.app')
@section('titulo', 'incio')

@section('contenido')
    <div class="inicio">
        <div class="inscripciones">
            <div>dewdw </div>

            <div class="registros">
                <div >
                    {{ count($estudiantes) }}
                </div>
                <div >
                    Registro
                </div>

            </div>

        </div>
    </div>
@endsection
