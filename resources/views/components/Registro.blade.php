@extends('layouts.app')
@section('titulo', 'formularioderegistro')

@section('contenido')
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    @if (session()->has('status'))
        <div class="alert alert-primary">{{ session()->get('status') }}</div>
    @endif

    <div class="container">
        <form  method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nombre</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nombre"
                    value="{{ old('nombre') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="exampleInputPassword1"
                    value="{{ old('apellido') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ old('email') }}">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    value="{{ old('password') }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1"
                    value="{{ old('password_confimation') }}">
            </div>
            <!--div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="recuerdame" value="recuerdame" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">recuerdame</label>
                    </div-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection-
