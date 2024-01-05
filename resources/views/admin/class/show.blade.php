@extends('layouts.adminBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container">
       
        <div class="pagetitle">
            <h1>Class Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('class.index') }}">Class</a></li>
                    <li class="breadcrumb-item active">View</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-10">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade profile-overview active show" id="profile-overview"
                                    role="tabpanel">
                                    <h5 class="card-title"> {{ $classes->name }}</h5>

                                    <h5 class="card-title">Class Details</h5>

                                    <hr style="height:5px; width:500px;"> 
                                    <div class="row">
                                        @foreach ($classes->skills as $skill)
                                            <div class="col-lg-3 col-md-4 label">Skills {{ $loop->iteration }}</div>
                                            <div class="col-lg-9 col-md-8 mb-3">{{ $skill }}</div>
                                    
                                            @if ($loop->index < count($classes->description))
                                                <div class="col-lg-3 col-md-4 label">Description {{ $loop->iteration }}</div>
                                                <div class="col-lg-9 col-md-8 mb-3">{{ $classes->description[$loop->index] }}</div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <hr style="height:5px; width:500px;">  
                                    <div class="row">
                                        @foreach ($classes->subject as $subjects)
                                        <div class="col-lg-3 col-md-4 label">Subject{{ $loop->iteration }}</div>
                                        <div class="col-lg-9 col-md-8 mb-3">{{ $subjects }}</div>
                                        @endforeach
                                    </div>
                                    <div class="text-center">
                                        <button type="reset" onclick="history.back()" class="btn btn-primary btn-md">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    </div>
@endsection
