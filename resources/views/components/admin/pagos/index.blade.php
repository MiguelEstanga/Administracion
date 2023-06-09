@extends('layouts.app')

@section('titulos')

@section('contenido')
    <div class="container-sm" >
        <div>
            <h2>Control De Pagos  </h2>
        </div>
        <table class="table  table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col"> estado </th>
                    <th scope="col"> deuda</th>
                    <th scope="col"> fecha de inicio </th>
                    <th>Id del Curso</th>
                    <th scope="col">Nombre del Curso</th>
                    <th>Id del profesor</th>
                    <th scope="col">Nombre del prfesor</th>
                    <th>Id del estudiante</th>
                    <th>Nomre del Estudiante</th>
                    <th scope="col">hora entrada</th>
                    <th scope="col">hora de salida</th>
                    <th scope="col">curso</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($data as $curso)
                    <tr>


                        <th scope="col">{{ $curso->Deuda }}</th>
                        <th scope="col"> {{ $curso->fecha_inicio }} </th>
                        <th scope="col">{{ $curso->id }}</th>
                        <th scope="col">{{ $curso->nombrecurso }}</th>
                        <th scope="col">{{ $curso->profesore_id }}</th>

                        <th scope="col">{{ $curso->name }}</th>
                        <th scope="col"> {{ $curso->estudiante_id }}</th>
                        <th scope="col"> {{ $curso->nombreestudiante }}</th>
                        <th>{{ $curso->apellidoestudiante }}</th>
                        <th scope="col">{{ $curso->hora_entrada }}</th>
                        <th scope="col">{{ $curso->hora_salida }}</th>

                        @if ($curso->Deuda > 0)
                            <th>
                                <a class="btn btn-success" href="{{ route('pagos.edit', $curso->id) }}">
                                    cancelar deuda</a>
                            </th>
                        @endif
                        @if ($curso->Deuda == 0)
                            <th>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path
                                        d="M8.834.066c.763.087 1.5.295 2.01.884.505.581.656 1.378.656 2.3 0 .467-.087 1.119-.157 1.637L11.328 5h1.422c.603 0 1.174.085 1.668.333.508.254.911.679 1.137 1.2.453.998.438 2.447.188 4.316l-.04.306c-.105.79-.195 1.473-.313 2.033-.131.63-.315 1.209-.668 1.672C13.97 15.847 12.706 16 11 16c-1.848 0-3.234-.333-4.388-.653-.165-.045-.323-.09-.475-.133-.658-.186-1.2-.34-1.725-.415A1.75 1.75 0 0 1 2.75 16h-1A1.75 1.75 0 0 1 0 14.25v-7.5C0 5.784.784 5 1.75 5h1a1.75 1.75 0 0 1 1.514.872c.258-.105.59-.268.918-.508C5.853 4.874 6.5 4.079 6.5 2.75v-.5c0-1.202.994-2.337 2.334-2.184ZM4.5 13.3c.705.088 1.39.284 2.072.478l.441.125c1.096.305 2.334.598 3.987.598 1.794 0 2.28-.223 2.528-.549.147-.193.276-.505.394-1.07.105-.502.188-1.124.295-1.93l.04-.3c.25-1.882.189-2.933-.068-3.497a.921.921 0 0 0-.442-.48c-.208-.104-.52-.174-.997-.174H11c-.686 0-1.295-.577-1.206-1.336.023-.192.05-.39.076-.586.065-.488.13-.97.13-1.328 0-.809-.144-1.15-.288-1.316-.137-.158-.402-.304-1.048-.378C8.357 1.521 8 1.793 8 2.25v.5c0 1.922-.978 3.128-1.933 3.825a5.831 5.831 0 0 1-1.567.81ZM2.75 6.5h-1a.25.25 0 0 0-.25.25v7.5c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25v-7.5a.25.25 0 0 0-.25-.25Z">
                                    </path>
                                </svg>
                            </th>
                        @endif

                    </tr>
                @endforeach


            </tbody>
        </table>


    </div>


@endsection
