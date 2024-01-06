@extends('layouts.publicBase')

@section('content')
<div class="container">
    @if ($message = session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                        <a href="{{ route('login') }}" class="btn btn-warning rounded-pill btn-lg"><i
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
                <a href="{{ route('login') }}" class="btn btn-outline-warning rounded-pill btn-lg"><i
                        class="bi bi-play-circle"></i><span>
                        Read More</span></a>
            </div>
        </div>
    </div>

   
@endsection
