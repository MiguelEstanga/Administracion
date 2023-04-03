@extends('layouts.app')

@section('titulos')

@section('contenido')

    <div class="container-sm ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> id Profesor</th>
                    <th scope="col">Nombre del Profesor</th>
                    <th scope="col">id materi</th>
                    <th scope="col">Nombre del Curso</th>
                    <th scope="col">hora entrada</th>
                    <th scope="col">hora salida</th>
                    <th scope="col">costo del curso</th>
                    <th scope="col">email Profesor</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($data as $info)
                    <tr>
                        <td class="col">
                            {{ $info->profesore_id }}
                        </td>
                        <td class="col">
                            {{ $info->name }}
                        </td>
                        <td class="col">
                            {{ $info->curso_id }}
                        </td>
                        <td class="col">
                            {{ $info->nombrecurso }}
                        </td>
                        <td class="col">
                            {{ $info->hora_entrada }}
                        </td>
                        <td class="col">
                            {{ $info->hora_salida }}
                        </td>
                        <td class="col">
                            {{ $info->precio }}bs
                        </td>
                        <td class="col">
                            {{ $info->email }}
                        </td>
                        <td>
                            <form action="{{ route('adminProfesorCurso.destroy', $info->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Borrar relacion</button>
                            </form>
                        </td>

                    </tr>
                @endforeach ()


            </tbody>
        </table>


    </div>

@endsection
