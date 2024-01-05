@extends('layouts.adminBase')
@section('content')
    <div class="container">
    </div>
    <div class="pagetitle">
        <h1>Feedback</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Feedback</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="card-title">List Feedback</h5>
                            </div>
                            <!-- Create Page-->
                        </div>


                        <!-- Table with stripped rows -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <b>No</b>
                                    </th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactUs as $contactUs)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $contactUs->user->name }}</td>
                                        <td>{{ $contactUs->subject }}</td>
                                        <td>{{ $contactUs->created_at->format('d F Y') }}</td>
                                        <td>
                                             <!-- Edit Page-->
                                             <a class="ri-eye-fill" data-bs-toggle="modal"
                                             data-bs-target="#basicModal-{{ $contactUs->id }}">
                                         </a>
                                        </td>
                                    </tr>
                                     <!-- Edit Modal -->
                                     <div class="modal fade" id="basicModal-{{ $contactUs->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">User Feedback</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-floating">
                                                                  <input type="text" class="form-control" id="floatingName" name="name" value="{{$contactUs->user->name }}" readonly>
                                                                  <label for="floatingName">Name</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-floating">
                                                                  <input type="text" class="form-control" id="floatingName" name="email" value="{{ $contactUs->user->email  }}" readonly>
                                                                  <label for="floatingName">Email</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12  mb-2">
                                                                <div class="form-floating">
                                                                  <input type="text" class="form-control" id="floatingName" name="email" value="{{ $contactUs->subject }}" readonly>
                                                                  <label for="floatingName">Subject</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <textarea class="form-control" id="floatingTextarea" style="height: 100px;" readonly>{{ $contactUs->message }}</textarea>
                                                                    <label for="floatingTextarea">Message</label>
                                                                  </div>
                                                              </div>
                                                              
                                                             
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Edit Modal-->
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    </div>
@endsection
