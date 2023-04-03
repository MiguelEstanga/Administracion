<div>

    @if (session('mensage'))
        <h1 class="alert alert-success">{{ session('mensage') }}</h1>
    @endif
    ...{{$categoria}}
    <div class="row">
        <form class="col" wire:submit.prevent="save()">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre de la categoria</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" wire:model='categoria' name="categoria">
            </div>


            <button wire:submit.prevent="save()" class="btn btn-primary">crear un nueva categoria</button>
        </form>

        <ul class="list-group col">
            <li class="list-group-item list-group-item-action active m-4" aria-current="true">categoriras creadas</li>
            @foreach ($categorias as $categoria)
                <li class="list-group-item">
                    {{ $categoria->id }}
                    <button wire:click="$emit( 'editar' , {{$categoria->id}} ) " class="btn tbn-success">editar</button>
                    <button wire:click="delete({{ $categoria->id }})" class="btn btn-danger">borrar</button>
                </li>
            @endforeach
                
        </ul>
    </div>
    <!-- Button trigger modal -->
   

    <!-- Modal -->
   
</div>
