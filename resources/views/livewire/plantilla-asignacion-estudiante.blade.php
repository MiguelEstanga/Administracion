<div class="container-fluid row">
    @if (session('mensage'))
        <h4>{{session('mensage')}}</h4>
    @endif
     {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="col">
        <h4>matricule a su estudiante</h4>
        <table class="col table table-striped">
            {{ $alert }}
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre curso</th>
                    <th scope="col">hora inicio</th>
                    <th scope="col">hora salida</th>
                    <th scope="col">fecha inicio</th>
                    <th scope="col">costo</th>
                    <th scope="col"> salida (aula)</th>
                    <th scope="col">matricula a estudiante</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <th wire:model='curso_id' scope="col">{{ $curso->id }}</th>
                        <th scope="col">{{ $curso->nombrecurso }}</th>
                        <th scope="col">{{ $curso->hora_entrada }}</th>
                        <th scope="col">{{ $curso->hora_salida }}</th>
                        <th scope="col">{{ $curso->fecha_incio }}</th>
                        <th scope="col">{{ $curso->precio }}BS</th>

                        <th scope="col"> {{ $curso->aula }}</th>
                        <th scope="col">
                            <button type="button" wire:click="modal({{ $curso->id }})" class="btn btn-primary">

                                Matricular
                            </button>

                        </th>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="col">


        <h3>
            {{ $nombrecurso }}
        </h3>
        <p class="text-success">monto a cancelar {{ $precio }} BS</p>
        <form wire:submit.prevent="save()">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">correo electronico del estudiante</label>
                <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">monto a pagar</label>
                <input type="text" wire:model.defer="pago" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Obsevacion</label>
                <input type="text" wire:model="observacion" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">id_curso</label>
                <input type="text" wire:model="curso_id" value="{{ $curso_id }}" class="form-control"
                    id="exampleInputPassword1">
            </div>

            <button type="submit"  class="btn btn-primary">guardar</button>
        </form>



    </div>

</div>
