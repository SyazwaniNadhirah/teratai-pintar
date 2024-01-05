@extends('layouts.adminBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container">
        <div class="pagetitle">
            <h1>View application</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('application.indexApp') }}">Application</a></li>
                    <li class="breadcrumb-item active">View</li>
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
                    <form class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="programType" value="{{ $application->program->programType}}">
                                <label for="floatingSelect">Program Type</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="title" value="{{ $application->programClass->name}}" readonly>
                                <label for="floatingSelect">Class</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="year_intake" value="{{ $application->year_intake}}" readonly>
                                <label for="floatingSelect">Year Intake</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="branch" value="{{ $application->activity->branch}}" readonly>
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
                            <button type="reset" onclick="history.back()" class="btn btn-primary btn-md">Back</button>
                        </div>
                    </form><!-- End floating Labels Form -->

        </section>
    </div>
@endsection
