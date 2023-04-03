<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    @if (session('mensage'))
        <h4 class="alert alert-success">{{ session('mensage') }}</h4>
    @endif
    <div class="container">
        <h2 class="alert alert-success"> Planilla para inscribir personal Administrativo y profesores </h2>
        <form class="row g-3" wire:submit.prevent="save()" enctype="multipart/form-data" method="post">
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">contraceña</label>
                @error('password')
                    <p>requirido</p>
                @enderror
                <input type="passwor" class="form-control" wire:model.defer="password" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">confirmar contraceña</label>
                <input type="passwor" wire:model.defer="password_confirmed" class="form-control" id="inputPassword4">
                @error('password')
                    <p>no conside</p>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" wire:model="email" class="form-control" id="inputEmail4">
                @error('email')
                    <p>verifique que el gmail no se este usando</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Nombre</label>
                <input type="text" class="form-control" wire:model.defer="name" id="inputAddress">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Apellido</label>
                <input type="text" wire:model.defer="apellido" class="form-control" id="inputAddress">
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">dni</label>
                <input type="text" wire:model="dni" class="form-control" id="inputCity">
                @error('dni')
                    tiene que ser un dni unico
                @enderror
               
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">rol</label>
                <select wire:model="role" id="pribilegios" class="form-select">
                    <option value="">null</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}">
                            {{ $role->name }}
                        </option>
                    @endforeach
                     @error('role')
                         <p> es importante que elija un rol en esta opcion </p>
                     @enderror       
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">sexo</label>

                <select wire:model.defer="sexo" id="pribelegios" class="form-select">
                    <option selected>null</option>
                    <option value="masculino">masculino</option>
                    <option value="femenino">femenino</option>
                </select>
            </div>
        
            <div class="col-12">

            </div>
            <div class="col-12">
                <button wire:submit.prevent="save()" type="submit" class="btn btn-primary">enviar</button>
            </div>
        </form>






    </div>
</div>
