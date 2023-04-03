@extends('layouts.app')

@section('titulos')

@section('contenido')

    
    @foreach ($data as $curso)
        <ul>
 
            <li scope="col">id {{ $curso->id }}</li>
            <li scope="col"> curso: {{ $curso->Deuda }}</li>
            <li scope="col"> fecha de inico: {{ $curso->fecha_inicio }} </li>
            <li scope="col"> cursi id  {{ $curso->id }}</li>
            <li scope="col"> nombre usuario:  {{ $curso->nombrecurso }}<li>
            <li scope="col"> profesor id  {{ $curso->profesore_id }}</li>

            <li scope="col"> profesor {{ $curso->name }}</li>
            <li scope="col"> curso id {{ $curso->estudiante_id }}</li>
            <li scope="col"> nombre {{ $curso->nombreestudiante }}</li>
            <li > apellido {{ $curso->apellidoestudiante }}</li>
            <li scope="col"> hora de entrada {{ $curso->hora_entrada }}</li>
            <li scope="col"> hora de salida  {{ $curso->hora_salida }}</li>
            <form action="{{ route('pagos.update', $curso->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="numbre" name="deuda"  required  >
                <button>submit</button>
            </form>
           

        </ul>
    @endforeach
@endsection
