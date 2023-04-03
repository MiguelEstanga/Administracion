@extends('layouts.app')
@section('titulo', 'administracion/usuarios')


@section('contenido')
    @if (session('actualizar'))
        <div class="alert alert-success">
            {{ session('actualizar') }}
        </div>
    @endif

    <div class="container-md m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">email</th>
                    <th scope="col"> rol </th>
                    <th scope="col"> edicion</th>
                    <th scope="col"> eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->apellido }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->role_id }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('adminUsuarios.edit', $usuario->id) }}">
                                Editar permisos o usuario
                            </a>

                        </td>
                        <td>
                            <form action="{{ route('adminUsuarios.destroy', $usuario->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Borrar usuario </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
