@extends('layouts.app')

@section('titulo', 'login')

@section('contenido')
    <h1>Bienvenido Inica secion</h1>
    @if (session('login'))
        <div class="alert"> {{ session('login') }} </div>
    @endif
    <div class="container-lg">
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="{{ old('email') }}" autofocus name="email" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input name="recuerdame" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
