@extends('layouts.app')

@section('titulo', 'asigna curso a los profesore')


@section('contenido')
    @error('curso_id')
        <div class="alert alert-danger">si no a creado un curso valla a listas crear curso</div>
    @enderror
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
                    <th scope="col"> asignar un curso </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roleid as $user)
                    <form action="{{ route('admin.asignar') }}" method="post">
                        @csrf
                        <tr>
                            <td>
                                <input type="text" value="{{ $user->id }}" name="profesor_id" hidden>
                               
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role_id }}</td>
                            <td>
                                <select name="curso_id">
                                    @foreach ($cursos as $curso)
                                        <option value="{{ $curso->id }}">
                                            {{ $curso->nombrecurso }}
                                        </option>
                                    @endforeach
                                </select>

                            </td>


                            <td>

                                <button class="btn btn-success">asignar</button>

                            </td>
                        </tr>
                    </form>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection
