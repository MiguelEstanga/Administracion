<div>

    <div class="container-fluid">
        <div>
            <h2>Control De Pagos </h2>
        </div>
        <table class="table   table-striped">
            <thead>
                <tr>
                    <th scope="col"> Costo del curso </th>
                    <th scope="col"> Deuda</th>
                    <th scope="col"> observacion </th>
                    <th scope="col">Id del Curso</th>
                    <th scope="col">Nombre del Curso</th>
                    <th scope="col">fecha de inicio </th>
                    <th scope="col">nombre</th>
                    <th scope="col">Id del estudiante</th>
                    <th scope="col">apellido</th>
                    <th scope="col">email</th>
                    <th scope="col">hora de entrada</th>
                    <th scope="col">hora de salida</th>
                    <th scope="col">fecha de inicio</th>
                    <th scope="col">aula</th>
                    <th scope="col">cancelar</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $curso)
                    <tr>

                        <th>{{ $curso->precio }}</th>
                        <th>{{ $curso->Deuda }}</th>

                        <th>{{ $curso->observacion }}</th>
                        <th>{{ $curso->cursos_id }}</th>
                        <th>{{ $curso->nombrecurso }}</th>
                        <th>{{ $curso->fecha_inicio }}</th>
                        <th>{{ $curso->name }}</th>
                        <th>{{ $curso->apellido }}</th>
                        <th>{{ $curso->email }}</th>
                        <th>{{ $curso->dni }}</th>
                        <th>{{ $curso->hora_entrada }}</th>
                        <th>{{ $curso->hora_salida }}</th>
                        <th>{{ $curso->fecha_inicio }}</th>
                        <th>{{ $curso->aula }}</th>
                        

                    </tr>
                @endforeach


            </tbody>
        </table>
      

       
        
    </div>
