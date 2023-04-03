<div>
    <div class="input-group mb-3">
        <span  class="input-group-text" id="basic-addon1">@</span>
        <input wire:model="{{$busqueda}}" type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <h1 class="alert alert-promary">Estudiantes inscritos {{count($numeroestudiante)}}</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">apellido</th>
                <th scope="col">email</th>
                <th scope="col">dmi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($estudiante as $estudiante)
                <tr>
                    <th>{{ $estudiante->id }}</th>
                    <th>{{ $estudiante->name }}</th>
                    <th>{{ $estudiante->apellido }}</th>
                    <th>{{ $estudiante->email }}</th>
                    <th>{{ $estudiante->dni }}</th>
                </tr>
            @endforeach



        </tbody>
    </table>
</div>
