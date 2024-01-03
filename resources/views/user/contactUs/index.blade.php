@extends('layouts.userBase')

@section('content')
    <div class="container">
        @if ($message = session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="text-black mb-0">{{ session()->get('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-6">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box card bg-warning text-white">
                            <i class="bi bi-geo-alt text-white"></i>
                            <h3 class="text-white">Address</h3>
                            <p>Jalan Cili Bunga 24/25 Seksyen 24,<br>Selangor, 40420</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card bg-success  text-white">
                            <i class="bi bi-telephone text-white"></i>
                            <h3 class="text-white">Call Us</h3>
                            <p>03-5542 1782<br>03-7955 5585</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card bg-primary text-white">
                            <i class="bi bi-envelope text-white"></i>
                            <h3 class="text-white">Email Us</h3>
                            <p>terataipintar@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box card text-white" style="background: #E67E22;">
                            <i class="bi bi-clock text-white"></i>
                            <h3 class="text-white">Open Hours</h3>
                            <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6">
                <div class="card p-4">
                    <h3>Get In Touch with Us!</h3>
                    <p class="text-muted">
                        Feel free to get in touch with us today to discover additional details about our remarkable
                        childcare centres and the unparalleled level of care we offer for your precious children.
                    </p>
                    <br>
                    <form method="POST" action={{ route('contactUs.store') }} enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
@endsection
