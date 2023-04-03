@extends('layouts.app')
@section('titulo', 'registrar un usuario')

@section('contenido')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    @if (session('mensage'))
        <div class="alert alert-primary">{{ session('mensage') }}</div>
    @endif
    <div class="container">

        <form class="row g-3" action="{{ route('adminUsuarios.store') }} " enctype="multipart/form-data" method="post">
            @csrf

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">contraceña</label>
                <input type="passwor" class="form-control" name="password" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">confirmar contraceña</label>
                <input type="passwor" name="password_confirmed" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email"  name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" id="inputAddress" >
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="inputAddress" >
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">dni</label>
                <input type="text" name="dni" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">rol</label>
                <select name="role" id="pribelegios" class="form-select">

                    @foreach ($roles as $role)
                        <option name="{{ $role['id'] }}" value="{{ $role['id'] }}">
                            {{ $role['name'] }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">sexo</label>
                <select name="sexo" id="pribelegios" class="form-select">
                    <option value="masculino">masculino</option>
                    <option value="femenino">femenino</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputState" class="form-label">imagen usuario</label>
                <input  type="file" name="imagenusuario" class="form-control" id="inputCity">
            </div>
            <div class="col-12">
            
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">enviar</button>
            </div>
        </form>






    </div>
@endsection-
