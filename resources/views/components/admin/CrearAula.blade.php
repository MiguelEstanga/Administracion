@extends('layouts.app')

@section('titulo', 'crearunaula')

@section('contenido')
    @if (session('aula'))
        <h1 class="alert alert-success">{{ session('aula') }}</h1>
    @endif

    <div class="container-sm">
        <form action="{{ route('admin.crearaula') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre del aula</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="aula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">placa</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" name="placa">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre de la categoria</label>

                <select name="categoria_id">
                    @foreach ($categoria as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">crear un nueva categoria</button>
        </form>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">placa</th>
                        <th scope="col">aula</th>
                        <th scope="col">categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aulas as $a)
                        <tr>
                            <th>{{ $a->id }}</th>
                            <th>{{ $a->placa }}</th>
                            <th>{{ $a->aula }}</th>
                            <th>{{ $a->categoria }}</th>
                            <th>
                                <form class="d-inline" action="{{ route('admin.borraraula', $a->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">borrar</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
