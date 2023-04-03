<div class="container-sm row">
    <div class="row">
        <div class="col">
            @if (session('curso'))
                <div class="alert alert-success">{{ session('curso') }}</div>
            @endif
            <form action="{{ route('admincurso.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label autofocus for="exampleInputEmail1" class="form-label">nombre</label>
                    <input type="text" class="form-control" name="nombrecurso" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('nombrecurso')
                        <span class="alert alert-danger"> campo requerido </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Horas hr</label>
                    <input type="time" value="12:00" step='3600' format="24hr" name="hora_entrada"
                        class="form-control" id="exampleInputPassword1">
                    @error('hora_entrada')
                        <span class="alert alert-danger"> campo entrada </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Horas salida</label>
                    <input type="time" value="15:00" name="hora_salida" class="form-control"
                        id="exampleInputPassword1">
                    @error('hor_salida')
                        <span class="alert alert-danger"> campo requerido </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">inversion bs</label>
                    <input type="number" name="inversion" class="form-control" id="exampleInputPassword1">
                    @error('nombrecurso')
                        <span class="alert alert-danger"> campo requerido </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">aula</label>

                    <select name="aula">
                        <option></option>
                        @foreach ($aula as $a)
                            <option value="{{ $a->aula }}">{{ $a->aula }}</option>
                        @endforeach
                    </select>
                    @error('aula')
                        <span class="alert alert-danger"> si no existe aula crea una en lista crear aula </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">fecha de inicio</label>
                    <input type="date" wire:model="fecha_inicio" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col">
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
                                        {{ $info->id }}
                                    </th>

                                    <td>
                                        {{ $info->nombrecurso }}
                                    </td>


                                    <td>
                                        {{ $info->hora_entrada }}
                                    </td>
                                    <td>
                                        {{ $info->hora_salida }}
                                    </td>
                                    <td>
                                        {{ $info->precio }}$
                                    </td>
                                    <td>
                                        <a href="{{ route('admincurso.edit', $info->id) }} "
                                            class="btn btn-success">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admincurso.delete', $info->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"> Eliminar curso </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach ()
                    </table>

                </ul>
            </div>
        </div>

    </div>
</div>
