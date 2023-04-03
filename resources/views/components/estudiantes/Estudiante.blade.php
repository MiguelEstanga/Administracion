@extends('layouts.app')

@section('titulo', 'asigna curso a los profesore')


@section('contenido')
    <div class="container-sm">
        @if (session('profesorcurso'))
            <div class="lert alert-success">{{ session('profesorcurso') }}</div>
        @endif
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">email</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->id}}</td>
                        <td>{{ $estudiante->name }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->email }}</td>

                        <td>
                            <form action="{{route('estudiante.destroy', $estudiante->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                            
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

@endsection
