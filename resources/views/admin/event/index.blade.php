@extends('layouts.adminBase')

<!-- FullCalendar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

@section('content')
    <div class="container">
        @if ($message = session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-black mb-0">{{ session()->get('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
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
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Create Event</a>
        </div>
        <div class="card-body">
            <div id="fullcalendar"></div>
        </div>
    </div>

    <!-- Start Create Modal-->
    <div class="modal fade" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Insert Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action={{ route('event.store') }} class="row g-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title">
                                    <label for="floatingName">Title</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" aria-label="category" name="category">
                                        <option selected>Please Select</option>
                                        <option value="Danger">Danger</option>
                                        <option value="Success">Success</option>
                                        <option value="Info">Info</option>
                                        <option value="Warning">Warning</option>
                                    </select>
                                    <label for="floatingSelect">Category</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="floatingName" name="start_time">
                                    <label for="floatingName">Start Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="floatingName" name="end_time">
                                    <label for="floatingName">End Time</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="description" id="floatingTextarea" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea">Description </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End Create Modal-->

    <!-- Start Update Modal-->
    @foreach ($events as $event)
    <div class="modal fade" id="basicModal2-{{ $event->id }}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST"  action="{{ route('event.update', ['event' => $event->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="{{ $event->title }}" readonly>
                                    <label for="floatingName">Title</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="{{ $event->category }}" readonly>
                                    <label for="floatingName">Category</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="floatingName"
                                        name="start_time" value="{{ $event->start_time }}">
                                    <label for="floatingName">Start Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" id="floatingName" name="end_time" value="{{ $event->end_time }}">
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End Edit Modal-->
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
                        $('#basicModal2-'+ clickedEventId).modal('show');
                    // Populate modal fields with event data (use event.extendedProps for additional properties)
                    $('#floatingName').val(event.title);
                    $('#floatingSelect').val(event.extendedProps.category);
                    $('#floatingStartTime').val(moment(event.start).format('YYYY-MM-DDTHH:mm'));
                    $('#floatingEndTime').val(moment(event.end).format('YYYY-MM-DDTHH:mm'));
                    $('#floatingTextarea').val(event.extendedProps.description);
                    // Add any additional logic for updating events
                },
                loading: function(bool) {
                    if (bool) $('#loading').show();
                    else $('#loading').hide();
                }
            });
        });
    </script>
@endsection
