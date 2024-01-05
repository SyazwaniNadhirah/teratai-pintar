@extends('layouts.userBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container" style="padding:20px 30px; margin-top: 60px;">
        <div class="pagetitle">
            <h1>Edit Application</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Application</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Details of Application</h5>
                    <br>
                    <p class="text-muted font-13">
                        1.0 School & Programme
                    </p>
                    <!-- Floating Labels Form -->
                    <form method="POST" action="{{ route('application.store') }}/{{ $application->id }}" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="ProgramType" name="program_id">
                                    <option selected disabled>{{ $application->program->programType}}</option>
                                    @foreach ($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->programType }}</option>
                                @endforeach
                                </select>
                                <label for="floatingSelect">Program Type</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="name" name="class_id">
                                    <option selected disabled>{{ $application->programClass->name}}</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Class</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="year_intake" name="year_intake">
                                    <option selected disabled>{{ $application->year_intake}}</option>
                                    <option value="2024">2024 </option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                                <label for="floatingSelect">Year Intake</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="branch" name="activity_id">
                                    <option selected disabled>{{ $application->activity->branch}}</option>
                                    @foreach ($activities as $activity)
                                        <option value="{{ $activity->id }}">{{ $activity->branch }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Branch</label>
                            </div>
                        </div>
                        <br>
                        <p class="text-muted font-13">
                            2.0 Children Details
                        </p>
                        <div class="col-md-12">
                            <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->name }}" readonly>
                                <label for="floatingName">Children Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->ic }}" readonly>
                                <label for="floatingName">IC</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->age }}" readonly>
                                <label for="floatingName">Age</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->gender }}" readonly>
                                <label for="floatingSelect">Gender</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->dob }}" readonly>
                                <label for="floatingEmail">DOB</label>
                            </div>
                        </div>
                        <p class="text-muted font-13">
                            3.0 Personal Details
                        </p>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="programType" value="{{ $application->user->name}}" readonly>
                                <label for="floatingCity">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="programType" value="{{ $application->user->email}}" readonly>
                                <label for="floatingCity">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName" name="title" value="{{  $application->user->children->first()->relationship }}" readonly>
                                <label for="floatingSelect">Relationship</label>
                            </div>
                        </div>
                       
                        <div class="text-center">
                            <button type="reset" onclick="history.back()" class="btn  btn-secondary btn-md">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- End floating Labels Form -->

        </section>
    </div>
@endsection
