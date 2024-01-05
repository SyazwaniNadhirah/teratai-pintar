@extends('layouts.adminBase')
@section('content')
<div class="container">
    @if ($message = session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p class="text-black mb-0">{{ session()->get('success') }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
    <div class="pagetitle">
        <h1>Application</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Application</li>
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
                                <h5 class="card-title">List Application</h5>
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
                                    <th>Applicant</th>
                                    <th>Child Name</th>
                                    <th>Program Type</th>
                                    <th>Class</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $application->user->name }}</td>
                                        <td>{{ $application->user->children->first()->name }}</td>
                                        <td>{{ $application->program->programType }}</td>
                                        <td>{{ $application->programClass->name }}</td>
                                        <td>{{ $application->created_at->format('d F Y') }}</td>
                                        @if ($application->status == 'Pending')
                                            <td>

                                                <span class="badge bg-warning ">Pending</span>
                                            </td>
                                        @elseif ($application->status == 'Rejected')
                                            <td>

                                                <span class="badge bg-danger ">Rejected</span>
                                            </td>
                                        @else
                                            <td>
                                                <span class="badge bg-success">Approved</span>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="{{ route('application.showApp', ['id' => $application->id]) }}"
                                                class="action-icon text-secondary">
                                                <i class="ri-eye-fill"></i>
                                            </a>

                                            <!-- Edit Page-->
                                            <a class="ri-edit-fill text-primary" data-bs-toggle="modal"
                                                data-bs-target="#basicModal-{{ $application->id }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Update Modal -->
                                    <div class="modal fade" id="basicModal-{{ $application->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="{{ route('application.updateApp', ['id' => $application->id]) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <input type="hidden" name="user_id" value="{{ $application->user_id }}">
                                                            <input type="hidden" name="program_id" value="{{ $application->program_id }}">
                                                            <input type="hidden" name="class_id" value="{{ $application->class_id }}">
                                                            <input type="hidden" name="activity_id" value="{{ $application->activity_id }}">
                                                            
                                                            <div class="col-md-6 mb-1">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingName" name="name"
                                                                        value="{{ $application->user->name }}" readonly>
                                                                    <label for="floatingName">Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingName" name="email"
                                                                        value="{{ $application->user->email }}" readonly>
                                                                    <label for="floatingName">Email</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-1">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                        id="floatingName" name="title"
                                                                        value="{{ $application->user->children->first()->name }}"
                                                                        readonly>
                                                                    <label for="floatingName">Children Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <select class="form-select" id="floatingSelect"
                                                                        aria-label="branch" name="status">
                                                                        <option selected disabled>
                                                                            {{ $application->status }}</option>
                                                                        <option value="Approved"
                                                                            {{ $application->status == 'Approved' ? 'selected' : '' }}>
                                                                            Approved</option>
                                                                        <option value="Rejected"
                                                                            {{ $application->status == 'Rejected' ? 'selected' : '' }}>
                                                                            Rejected</option>
                                                                    </select>
                                                                    <label for="floatingSelect">Status</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
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
