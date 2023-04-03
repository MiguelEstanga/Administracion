<div class="container-sm">

    <div class="container-sm row">
        @if (session('curso'))
            <div class="alert alert-success">{{ session('curso') }}</div>
        @endif
        <h1 class="alert alert-success">cree un nuevo curso</h1>
        <form wire:submit.prevent="save()" class="col">
            <div class="mb-3">
                <label autofocus for="exampleInputEmail1" value="{{$nombrecurso}}" class="form-label">nombre curso {{ $nombrecurso }}</label>
                <input type="text" class="form-control" wire:model="nombrecurso" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horas hr</label>
                <input type="time" value="12:00" step='3600' format="24hr" wire:model.defer="hora_entrada"
                    class="form-control" id="exampleInputPassword1">
                @error('hora_entrada')
                    <span class="alert alert-danger"> campo entrada </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Horas salida</label>
                <input type="time" value="15:00" wire:model.defer="hora_salida" class="form-control"
                    id="exampleInputPassword1">
                @error('hor_salida')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">inversion bs</label>
                <input type="number" wire:model="inversion" class="form-control" id="exampleInputPassword1">
                @error('nombrecurso')
                    <span class="alert alert-danger"> campo requerido </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{ $aula }}</label>

                <select wire:model="aula">
                    <option selected>null</option>
                    @foreach ($aulas as $a)
                        <option value="{{ $a->aula }}"> {{ $a->aula }} </option>
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

            
            <button wire:submit.prevent="save()" class="btn btn-primary">guardar</button>
        </form>
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
                                        <!-- Button trigger modal -->
                                

                                    </td>
                                    <td>
                                        <div wire:click="delete({{ $info->id }})" class="btn btn-danger">eliminar
                                        </div>
                                    </td>
                                </tr>
                            @endforeach ()
                    </table>

                </ul>
            </div>
        </div>

</div>
</div>
