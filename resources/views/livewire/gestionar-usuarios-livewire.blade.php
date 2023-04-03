<div class="container-md m-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">email</th>
                <th scope="col"> rol </th>
                
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
                       <button class="btn btn-danger" wire:click="delete({{$usuario->id}})">eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
