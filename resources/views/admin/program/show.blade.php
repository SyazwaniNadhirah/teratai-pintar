@extends('layouts.adminBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container">
        <div class="pagetitle">
            <h1>Detail Program</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('program.index') }}">Program</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <br><br>
                            <img src={{ Storage::url($program->picture) }} class="d-block w-100" style="height: 500px;" >
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Description</h5>
                                <p class="small fst-italic">{{ $program->description }}</p>

                                <h5 class="card-title"> Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Program Type</div>
                                    <div class="col-lg-9 col-md-8">{{ $program->programType }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Price</div>
                                    <div class="col-lg-9 col-md-8">RM {{ $program->price }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="reset" onclick="history.back()" class="btn btn-secondary">Back</button>
                          </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
