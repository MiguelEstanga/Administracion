@extends('layouts.app')

@section('titulo', 'lista de cursp')


@section('contenido')
    <div class="container-sm">
        <div>
            <h2>Todos los cursos</h2>
        </div>
        <ul>
            <table class="table table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        
                        <th scope="col">Nombre del curso</th>
                        
                        <th scope="cp;">hora de entrada</th>
                        <th scope="col">hora de salida</th>
                        <th scope="col">Costo</th>
                        <th scope="col">opciones</th>
                        <th scope="col">eliminar</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $info)
                       
                        <tr>
                            <th>
                                {{$info->id}}
                            </th>
                        
                            <td>
                                {{ $info->nombrecurso }}
                            </td>
                          
                      
                            <td>
                                {{  $info->hora_entrada }}
                            </td>
                            <td>
                                {{ $info->hora_salida }}
                            </td>
                            <td>
                                {{$info->precio}}$
                            </td>
                            <td>
                                <a href="{{ route('admincurso.edit' , $info->id) }} " class="btn btn-success">Editar</a>
                            </td>
                            <td>    
                                <form  action="{{ route('admincurso.delete' , $info->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger" > Eliminar curso </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach ()
            </table>

        </ul>
    </div>
@endsection
