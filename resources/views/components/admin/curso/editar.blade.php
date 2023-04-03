@extends('layouts.app')

@section('titulo', 'crear tituli')

@section('contenido')

    <div class="container-sm">
        <h2>editar curso  de {{$curso->nombrecurso }}</h2>

        <form action="{{ route('admincurso.update' ,$curso->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label autofocus for="exampleInputEmail1" class="form-label">nombre</label>
                <input value="{{$curso->nombrecurso}}" 
                        type="text" 
                        class="form-control" 
                        name="nombrecurso" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Horas hr</label>
                <input  type="time"  
                        value="{{$curso->hora_entrada}}" 
                        step='3600' 
                        format="24hr" 
                        name="hora_entrada" 
                        class="form-control" 
                        id="exampleInputPassword1">
                @error('hora_entrada')
                    <span class="alert alert-danger"> campo entrada </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horas salida</label>
                <input type="time"  
                       value="{{$curso->hora_salida}}"
                       name="hora_salida" 
                       class="form-control" 
                       id="exampleInputPassword1">
                @error('hor_salida')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
           
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">inversion bs</label>
                <input value="{{$curso->precio}}" type="number" name="inversion" class="form-control" id="exampleInputPassword1">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-success">editar</button>
        </form>
    </div>

@endsection
