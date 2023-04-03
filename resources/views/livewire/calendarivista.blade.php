<div class="container-fluid row">
    <div class="col">
     
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">curso</th>
                        <th scope="col">fecha inicio</th>
                        <th scope="col">hora entrada</th>
                        <th>hora salida</th>
                        <th>aula</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($cursos as $c)
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{$c->nombrecurso}}</th>
                        <th scope="col">{{$c->fecha_inicio}}</th>
                        <th scope="col">{{$c->hora_entrada}}</th>
                        <th>{{$c->hora_salida}}</th>
                        <th>{{$c->aula}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
    </div>
    <div class="col">
        <div id="calendar" class="">

        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            locale: "es",
            events: @json($agenda)
        });
        calendar.render();
    });
    console.log(2)
</script>
