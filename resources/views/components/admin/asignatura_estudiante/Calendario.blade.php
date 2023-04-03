@extends('layouts.app')


@section('contenido')
    <div class="container-sm">
        <div id="calendar">

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                locale:"es",
                events:@json($agenda) 
            });
            calendar.render();
        });
        console.log(2)
    </script>
@endsection
