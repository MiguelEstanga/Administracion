@extends('layouts.app')

@section('titulo', 'crear tituli')

@section('contenido')

    <div class="container-sm">
        @if (session('curso'))
            <div class="alert alert-success">{{ session('curso') }}</div>
        @endif
        <form action="{{ route('admincurso.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label autofocus for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="nombrecurso" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horas hr</label>
                <input type="time" value="12:00" step='3600' format="24hr" name="hora_entrada" class="form-control"
                    id="exampleInputPassword1">
                @error('hora_entrada')
                    <span class="alert alert-danger"> campo entrada </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horas salida</label>
                <input type="time" value="15:00" name="hora_salida" class="form-control" id="exampleInputPassword1">
                @error('hor_salida')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">inversion bs</label>
                <input type="number" name="inversion" class="form-control" id="exampleInputPassword1">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">aula</label>

                <select name="aula">
                    @foreach ($aula as $a)
                        <option value="{{ $a->aula }}">{{ $a->aula }}</option>
                    @endforeach
                </select>
                @error('aula')
                    <span class="alert alert-danger"> si no existe aula crea una en lista crear aula </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
