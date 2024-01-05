@extends('layouts.adminBase')

<!-- FullCalendar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

@section('content')
    <div class="pagetitle">
        <h1>Event</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Event </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">FullCalendar</h5>
            <a href="{{ route('event.create') }}" class="btn btn-primary">Create Event</a>
        {{-- @foreach ($events as $event)
            <div>
                <h2>{{ $event->title }}</h2>
                <p>{{ $event->description }}</p>
                <p>Start Time: {{ $event->start_time }}</p>
                <p>End Time: {{ $event->end_time }}</p>
                <a href="{{ route('event.edit', $event) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('event.destroy', $event) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach --}}
        </div>
        <div class="card-body">
            <div id="fullcalendar"></div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- FullCalendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calendarEl = document.getElementById('fullcalendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap',
                initialView: 'dayGridMonth',
                initialDate: '2023-06-06',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                // Display data in calendar
                events: [
                    @foreach ($events as $event)
                        {
                            title: '{{ $event->title }}',
                            start: '{{ $event->start_time }}',
                            end: '{{ $event->end_time }}'
                        },
                    @endforeach
                ]
            });

            calendar.render();
        });
    </script>
@endsection
