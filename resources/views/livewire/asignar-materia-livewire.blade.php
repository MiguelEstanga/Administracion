<div class="container-sm">
    @if (session('profesorcurso'))
        <div class="lert alert-success">{{ session('profesorcurso') }}</div>
    @endif
    <table class="table">
        <h1>{{$h1}}</h1>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">email</th>
                <th scope="col"> asignar un curso </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <form wire:submit.prevent="save({{$user->id}})" >
                   
                    <tr>
                        <td>
                           <h1> {{$user->id}} </h1>
                            <input type="text" value="{{ $user->id }}" wire:model="profesor_id" hidden>
                           
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_id }}</td>
                        <td>
                            {{$curso_id}}
                            <select wire:model="curso_id">
                                <option selected >null </option>
                                @foreach ($cursos as $curso)
                                    <option value="{{ $curso->id }}">
                                        {{ $curso->nombrecurso }}
                                    </option>
                                @endforeach
                            </select>

                        </td>


                        <td>

                            <button wire:click="save({{$user->id}})" class="btn btn-success">asignar</button>

                        </td>
                    </tr>
                </form>
            @endforeach

        </tbody>
    </table>
</div>