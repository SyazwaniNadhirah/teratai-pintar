@extends('layouts.userBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container" style="padding:20px 30px; margin-top: 60px;">
        <div class="pagetitle">
            <h1>Create application</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.index') }}">Application</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Please Fill the Form</h5>
                    <br>
                    <p class="text-muted font-13">
                        1.0 School & Programme
                    </p>
                    <!-- Floating Labels Form -->
                    <form method="POST" action={{ route('application.store') }} enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="ProgramType" name="program_id">
                                    <option selected disabled>Please Select</option>
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
                                    <option selected disabled>Please Select</option>
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
                                    <option selected disabled>Please Select</option>
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
                                    <option selected disabled>Please Select</option>
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
                                <input type="text" class="form-control" id="floatingName" placeholder="Your Name"
                                    name="name">
                                <label for="floatingName">Children Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your IC"
                                    name="ic">
                                <label for="floatingName">IC</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="Your age"
                                    name="age">
                                <label for="floatingName">Age</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="gender"
                                    name="gender">
                                    <option selected disabled>Please Select</option>
                                    <option value="Male">Male </option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Gender</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingEmail" placeholder="Your DOB" name="dob">
                                <label for="floatingEmail">DOB</label>
                            </div>
                        </div>
                        <p class="text-muted font-13">
                            3.0 Personal Details
                        </p>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingCity" value="{{ $user->name }}" readonly>
                                <label for="floatingCity">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingCity" value="{{ $user->email }}" readonly>
                                <label for="floatingCity">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="relationship"
                                    name="relationship">
                                    <option selected disabled>Please Select</option>
                                    <option value="Father">Father </option>
                                    <option value="Mother">Mother</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="floatingSelect">Relationship</label>
                            </div>
                        </div>
                       
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End floating Labels Form -->

        </section>
    </div>
@endsection
