<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
  
    <div class="container">
        <h2 class="alert alert-success">  Planilla para inscribir Estudiante  coloque todo los datos </h2>
        <form class="row g-3" wire:submit.prevent="save()" enctype="multipart/form-data" method="post">


          
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" wire:model.defer="email" class="form-control" id="inputEmail4">
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
                <label for="inputPassword4" class="form-label">contraceña</label>
                <input type="passwor" class="form-control" wire:model.defer="password" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">confirmar contraceña</label>
                <input type="passwor" wire:model.defer="password_confirmed" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-2">
                <label for="inputState" class="form-label">sexo</label>
                <option selected ></option>
                <select wire:model.defer="sexo" id="pribelegios" class="form-select">
                    <option  value="masculino">masculino</option>
                    <option value="femenino">femenino</option>
                </select>
            </div>
    
            <div class="col-12">
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">dni</label>
                    <input type="text" wire:model.defer="dni" class="form-control" id="inputCity">
                </div>
            </div>
          
            <div class="col-12">
                <button wire:submit.prevent="save()" type="submit" class="btn btn-primary">enviar</button>
            </div>
        </form>






    </div>
</div>
