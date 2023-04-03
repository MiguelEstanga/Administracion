<div class="container-x ">
    <table class="table">
        <thead >
            <tr>
                <th scope="col"> deuda</th>
                <th scope="col"> fecha de inicio </th>
                <th scope="col">Id del Curso</th>
                <th scope="col">Nombre del Curso</th>
                <th scope="col">Id del profesor</th>
                <th scope="col">Nombre del prfesor</th>
                <th scope="col">Id del estudiante</th>
                <th scope="col">Nomre del Estudiante</th>
                <th scope="col">hora entrada</th>
                <th scope="col">hora de salida</th>
                <th scope="col">curso</th>
                <th scope="col"> ver en el calendario </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $curso)
                <tr>

               
                <td scope="col">{{ $curso->Deuda }}</td>
                <td > {{ $curso->fecha_inicio}} </td>
                <td >{{$curso->id}}</td>
                <td >{{ $curso->nombrecurso}}<td>
                <td >{{$curso->profesore_id}}</td>
              
                <td >{{ $curso->name}}</td>
                <td > {{$curso->estudiante_id}}</td>
                <td > {{ $curso->nombreestudiante }}</td>
                <td >{{ $curso->apellidoestudiante}}</td>
                <td >{{$curso->hora_entrada}}</td>
                <td >{{$curso->hora_salida}}</td>
                <td><a class="btn btn-success" href="{{route('asignaturas.show' , $curso->curso_profesor_id)}}">ver</a></td>
                
            </tr>
            @endforeach


        </tbody>
    </table>


</div>