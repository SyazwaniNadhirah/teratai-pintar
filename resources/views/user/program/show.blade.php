@extends('layouts.userBase')

</aside><!-- End Sidebar-->
@section('content')
<div class="container" style="padding:20px 30px; margin-top: 60px;">
    <div class="pagetitle">
        <h1>{{ $programs->programType }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('user.program') }}">Program Type</a></li>
                <li class="breadcrumb-item active">{{ $programs->programType }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <br><br>
                            <img src={{ Storage::url($programs->picture) }} class="d-block w-100" style="height: 500px;" >
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Description</h5>
                                <p class="small fst-italic">{{ $programs->description }}</p>

                                <h5 class="card-title"> Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Program Type</div>
                                    <div class="col-lg-9 col-md-8">{{ $programs->programType }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Price</div>
                                    <div class="col-lg-9 col-md-8">RM {{ $programs->price }}</div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('application.index') }}" class="btn btn-warning rounded-pill"><i
                                    class="bi bi-play-circle"></i><span>
                                    Register Now</span></a>
                                    <br><br>
                              </div>
                        </div>
                        
                    </div>
                </div>
        </section>
    </div>
@endsection
