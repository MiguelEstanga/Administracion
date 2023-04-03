<div class="container">
    <form action="{{ route('estudiante.store') }} " method="post">
        @csrf
        <div class="mb-3">
           
            </label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="curso_id">
            @if (session('warnir'))
                <div class="alert alert-warning"> {{ session('warnir') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
               placa del aula virtual
            </label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="aula_id">
            @if (session('warningaula'))
                <div class="alert alert-warning"> {{ session('warningaula') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
               email del estudiante
            </label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email_estudiante">
            @if (session('warningestudiante'))
                <div class="alert alert-warning"> {{ session('warningestudiante') }} </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
               fecha de inicio
            </label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="fecha_inicio">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
               monto del pago
            </label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="montodelpago">
        </div>
        <button type="submit" class="btn btn-primary">guardar</button>
    </form>
</div>