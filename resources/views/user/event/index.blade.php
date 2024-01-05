@extends('layouts.userBase')
<!-- FullCalendar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>


@section('content')

    <section style="padding:20px 30px; margin-top: 60px;" >
        <div class="container" >
            <div class="pagetitle">
                <h1>Event Calendar</h1>
            </div><!-- End Page Title -->
            <div class="card" style="padding:20px 30px; margin-top: 60px;">
                <div class="card-body">
                    <div id="fullcalendar">
                    </div>
                </div>
            </div>
        </div>
        <!-- Start View Modal-->
        @foreach ($events as $event)
            <div class="modal fade" id="basicModal-{{ $event->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Details Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingName" name="title"
                                                value="{{ $event->title }}" readonly>
                                            <label for="floatingName">Title</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 ">
                                        <div class="form-floating">
                                            <input type="datetime-local" class="form-control" id="floatingName"
                                                name="start_time" readonly value="{{ $event->start_time }}">
                                            <label for="floatingName">Start Time</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="datetime-local" class="form-control" id="floatingName"
                                                name="end_time" readonly value="{{ $event->end_time }}">
                                            <label for="floatingName">End Time</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="floatingTextarea" style="height: 100px;" readonly>{{ $event->description }}</textarea>
                                            <label for="floatingTextarea">Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End View Modal-->
        @endforeach


        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- Moment.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <!-- FullCalendar -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#fullcalendar').fullCalendar({
                    events: [
                        // Existing events from Google Calendar or other sources
                        {
                            url: 'https://www.google.com/calendar/feeds/your_calendar_xml_feed_url/public/basic',
                            type: 'GET',
                            dataType: 'xml',
                            error: function() {
                                alert('There was an error while fetching Google Calendar!');
                            },
                            color: 'yellow', // a non-ajax option
                            textColor: 'black' // a non-ajax option
                        },
                        //display event event
                        @foreach ($events as $event)
                            {
                                id: '{{ $event->id }}',
                                title: '{{ $event->title }}',
                                start: '{{ $event->start_time }}',
                                end: '{{ $event->end_time }}',
                                @if ($event->category === 'Danger')
                                    backgroundColor: '#dc3545',
                                    borderColor: '#dc3545',
                                @elseif ($event->category === 'Success')
                                    backgroundColor: '#198754',
                                        borderColor: '#198754',
                                @elseif ($event->category === 'Info')
                                    backgroundColor: '#0dcaf0',
                                        borderColor: '#0dcaf0',
                                @elseif ($event->category === 'Warning')
                                    backgroundColor: '#ffc107',
                                        borderColor: '#ffc107',
                                @endif
                            },
                        @endforeach
                    ],
                    eventClick: function(event) {
                        // Access the correct ID from the clicked event
                        const clickedEventId = event.id;
                        // Target the modal with the corresponding ID
                        $('#basicModal-'+ clickedEventId).modal('show');
                        // Populate modal fields with event data (use event.extendedProps for additional properties)
                        $('#floatingName').val(event.title);
                        $('#floatingSelect').val(event.extendedProps.category);
                        $('#floatingStartTime').val(moment(event.start).format('YYYY-MM-DDTHH:mm'));
                        $('#floatingEndTime').val(moment(event.end).format('YYYY-MM-DDTHH:mm'));
                        $('#floatingTextarea').val(event.extendedProps.description);
                    },
                    loading: function(bool) {
                        if (bool) $('#loading').show();
                        else $('#loading').hide();
                    }
                });
            });
        </script>

    </section>
@endsection
