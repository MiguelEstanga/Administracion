@extends('layouts.app')

@section('titulo', 'listas')

@section('contenido')
    <div class="container-sm row">
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action active" aria-current="true">opciones de registro</li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('crearcategoria') }}">
                        crear una nueva categoria para el aula virtual
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('registrarusuario') }}">
                        planilla de registro de usuario
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item " aria-current="page" href="{{ url('crearcurso') }}">
                        crear curso
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('crearaula') }}">
                        crear un aula virtual
                    </a>
                </li>
            </ul>

        </div>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action active" aria-current="true">opciones de listas</li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('profesores') }}">
                        ver profesores
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('estudiantesinscritos') }}">
                        estudiantes inscritos
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('profesoresymaterias') }}">
                        ver prfesores con materias asignadas
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="dropdown-item" aria-current="page" href="{{ url('crearaula') }}">
                        crear un aula virtual
                    </a>
                </li>
            </ul>

        </div>


    </div>

@endsection
