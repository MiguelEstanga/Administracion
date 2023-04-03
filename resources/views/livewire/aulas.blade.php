<div>
    
    <div class="container-sm row">
        <form wire:submit.prevent="save()" class="col">
           
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre del aula</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" wire:model.defer="aula">
            </div>
           
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">placa</label>
                <input required autofocus type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" wire:model.defer="placa">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">categoria </label>
                {{$categoria_id}}
                <select wire:model="categoria_id" >
                    <option selected>ninguno</option>
                    @foreach ($categorias as $categoria)
                   
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </div>

            <button  wire:submit.prevent="save()" type="submit" class="btn btn-primary">crear un nueva categoria</button>
        </form>

        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">placa</th>
                        <th scope="col">aula</th>
                        <th scope="col">categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aulas as $a)
                        <tr>
                            <th>{{ $a->id }}</th>
                            <th>{{ $a->placa }}</th>
                            <th>{{ $a->aula }}</th>
                            <th>{{ $a->categoria }}</th>
                            <th>
                              
                                    <a class= "btn btn-danger" wire:click="delete({{$a->id}})"> borrar </a>
                              
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
