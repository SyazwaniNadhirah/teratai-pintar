@extends('layouts.userBase')

@section('content')
<div class="container">

    @if ($message = session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="padding:20px 30px; margin-top: 60px;">
            <p class="text-black mb-0">{{ session()->get('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="width:100%; height:100vh; background:url('https://img.freepik.com/free-photo/cute-girl-using-virtual-headset-pointing-her-finger-something_23-2148040071.jpg?w=900&t=st=1704395210~exp=1704395810~hmac=c4e707568c58f6e521c81b6a4371173673b2984bdabdae7f2936eaf8ecfcd06e')center/cover no-repeat;">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1><b>Teratai Pintar</b></h1>
                    <h2>Suggesting growth, intelligence, and the beauty of learning</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('user.dashboard') }}" class="btn btn-warning rounded-pill btn-lg"><i
                                class="bi bi-play-circle"></i><span>
                                Learn More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <div class="body-block py-4  bg-white  text-center pt-5 " id="block-3">
        <div class="container">
            <div class="col-lg-12 p-0 mb-4">
                <h3 class="font-weight-normal">CENTRE TOUR</h3>
                <p>We can work with your availability to make an appointment. A tour will give you and your child the
                    opportunity to meet the teachers and view the classroom.
                </p>
                <a href="{{ route('user.dashboard') }}" class="btn btn-outline-warning rounded-pill btn-lg"><i
                        class="bi bi-play-circle"></i><span>
                        Read More</span></a>
            </div>
        </div>
    </div>

    <section class="section mt-3">
        <h1 class="font-weight-normal" style="text-align: center">CLASSES</h1>
        <div class="row" style="padding:20px 30px;">
            <div class="row justify-content-center">
                @foreach ($classes as $class)
                    <div class="col-lg-3"> 
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                        <h2 class="fw-normal">{{ $class->name }}</h2>
                        @foreach ($class->skills as $skill)
                            <p><i class="bi bi-asterisk">{{ $skill }}</i></p>
                        @endforeach
                       
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div>
        </div>
        <div class="body-block py-4  bg-warning  text-center pt-5 " id="block-3">
            <div class="container">
                <div class="col-lg-12 p-0 mb-4">
                    <h3 class="font-weight-normal">ABOUT US</h3>
                    <p>"Teratai Pintar" translates to "Smart Lotus" in English. It's a unique and culturally resonant name that could work well for a kindergarten system in Malaysia, suggesting growth, intelligence, and the beauty of learning. If it aligns with the vision and values of your kindergarten system, it could be a great choice. 
                    </p>
                    <a href="{{ route('user.dashboard') }}" class="btn btn-outline-warning rounded-pill btn-lg"><i
                            class="bi bi-play-circle"></i><span>
                            Read More</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
