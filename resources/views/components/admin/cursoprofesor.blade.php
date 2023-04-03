@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="alert alert-success">
            seguro que quieres que el prfesor {{$profesor->name}} dicte el curso {{$curso->nombrecurso }}
        </div>
        <div>
           
            <form action="{{ route("admin.asignar") }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">id curso</label>
                      <input disabled  type="text" name="curso_id" class="form-control" value="{{ $curso->id }}" id="exampleInputEmail1" >
                     
                    </div>
                    <div class="mb-3">
                      <label  for="exampleInputPassword1" class="form-label">id profesor</label>
                      <input disabled type="text" name="profesor_id" class="form-control" value="{{ $profesor->id }}" id="exampleInputPassword1">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                  
                  
            </form>
            <a class="" href="{{Route('admin.profesores')}}">regresar</a>
        </div>
    </div>
@endsection