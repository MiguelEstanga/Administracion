@extends('layouts.app')

@section('titulo', 'Administracion.Edicion')

@section('contenido')
    <div class="container-sm">
       
            <form action="{{ route('adminUsuarios.update', $user->id )}}" method="post"  >
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">nombre</label>
                    <input type="text" class="form-control" 
                            id="exampleInputPassword1" 
                            name="name"
                            value="{{$user->name}}"
                            >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" 
                            name="apellido" 
                            id="exampleInputPassword1"
                            value="{{$user->apellido}}"
                            >
                </div>
                <div class="mb-3">
                    <label  for="exampleInputEmail1" class="form-label">Email address</label>
                    <input  type="email" class="form-control" 
                            name="email" id="exampleInputEmail1" 
                            aria-describedby="emailHelp"
                            value="{{$user->email}}"
                            >
                </div>
                
                <div class="div">
                    <label  for="pribilegios" class="form-label">Pribilegios</label>
                    <select name="role" id="pribelegios">
                       
                        @foreach ( $roles as  $role)
                            <option name="{{$role['id']}}" value="{{ $role['id'] }}">
                                {{$role['name']}}
                            </option> 
                        @endforeach

                    </select>
                </div>
            
               
                <!--div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="recuerdame" value="recuerdame" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">recuerdame</label>
                </div-->
                <button type="submit" class="btn btn-primary">Editar usuarios</button>
            </form>
           
    </div>
@endsection
