@extends('layouts.userBase')

@section('content')

</div><!-- End Page Title -->
    <section style="padding:20px 30px; margin-top: 60px;">
        <div class="pagetitle">
            <h1>DETAIL CLASSES</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mb-3">
            @foreach ($classes as $class)
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-warning">
                <div class="card-header py-3 text-bg-warning border-warning">
                  <h4 class="my-0 fw-normal text-center">{{ $class->name }}</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                        <ul class="list-unstyled mt-3 mb-4">
                            @foreach ($class->skills as $skill)
                            <h1 class="card-title pricing-card-title"><small class="badge rounded-pill bg-secondary">Skills {{ $loop->iteration }}</small></h1>
                            <li>{{ $skill }}</li>
                            @if ($loop->index < count($class->description))
                            <li class="bx bxs-badge"> {{ $class->description[$loop->index] }}</li>
                            @endif
                            @endforeach
                          </ul> 
                    </div>
                    <div class="col-12">
                        <ul class="list-unstyled mt-3 mb-4">
                            <h1 class="badge rounded-pill bg-primary">Subject</h1>
                            @foreach ($class->subject as $subjects)
                            <li class="bi bi-book-half"> {{ $subjects }}</li>
                            @endforeach
                          </ul> 
                    </div>
                  </div>
                  <a href="{{ route('application.index') }}" class="w-100 btn btn-lg btn-warning"><i
                    class="bi bi-play-circle"></i><span>
                    Register Now</span></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>

    </section>
@endsection
