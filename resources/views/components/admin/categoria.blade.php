@extends('layouts.app')

@section('titulo', 'crearunacategoria')

@section('contenido')

    @if (session('mensage'))
        <h1 class="alert alert-success">{{ session('mensage') }}</h1>
    @endif

    <div class="container-sm">
        <form action="{{ route('admin.crearcategoria') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre de la categoria</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="categoria">
            </div>


            <button type="submit" class="btn btn-primary">crear un nueva categoria</button>
        </form>

        <ul class="list-group">
            <li class="list-group-item list-group-item-action active m-4" aria-current="true">categoriras creadas</li>
            @foreach ($categorias as $categoria)
                <li class="list-group-item">
                    {{ $categoria->categoria }} 
                   
                    <form class="d-inline" action="{{ route('admin.update' , $categoria->id) }}" method="post">
                        @csrf
                        @method("PUT")
                        <input class="input" type="text" name="categoria">
                        <button class="btn btn-primary"> editar</button>
                    </form>
                    <form class="d-inline" action="{{route('admin.borraraula' , $categoria->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger">borrar</button>
                    </form>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
