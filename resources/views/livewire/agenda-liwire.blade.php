<div class="container-sm row m-center" >
    <div class="col mr-4">
        <form  wire:submit.prevent="save()" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">dias libre</label>
                <input type="date" wire:model.defer ="dias_sin_libre" class="form-control" wire:model="dias_sin_libre" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">concepto</label>
                <input type="text" wire:model.defer ="conceptos" class="form-control"  wire:model="conceptos" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">dias libres</li>

            @foreach ( $agenda as $a )
                <li class="list-group-item" >
                    {{$a->dias_sin_libre }}
                    {{$a->conceptos}}
                    <a class="btn btn-sicces">editar</a>
                    <a wire:click="delete({{$a->id}})" class="btn btn-danger"> eliminar</a>
                </li>
            @endforeach    

        </ul>
    </div>
</div>
