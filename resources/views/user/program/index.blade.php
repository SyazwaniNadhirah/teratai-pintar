@extends('layouts.userBase')

@section('content')

    <section style="padding:20px 30px; margin-top: 60px;">
           <div class="container">
            <div class="pagetitle">
                <h1>DETAIL PROGRAM</h1>
            </div><!-- End Page Title -->
            <div class="row" >
                @foreach ($programs as $program)
                    <div class="col-12">
                        <!-- Card with an image on left -->
                        <div class="card mb-3 ">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src={{ Storage::url($program->picture) }} class="img-fluid rounded-start "
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $program->programType }}</h5>
                                        <p class="card-text">{{ $program->description }}</p>
                                    </div>
                                    <div class="d-flex justify-content-lg-start" style="margin-left: 18px;">
                                        <a href="{{ route('user.showProgram', ['id' => $program->id]) }}" class="btn btn-warning rounded-pill btn-lg"><i
                                                class="bi bi-play-circle"></i><span>
                                                Learn More</span></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- End Card with an image on left -->
                    </div>
                @endforeach
            </div>
           </div>
       

    </section>
@endsection
