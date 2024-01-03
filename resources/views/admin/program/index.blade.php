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
        <h1>Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Program</li>
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
                                <h5 class="card-title">List Children</h5>
                            </div>
                            <!-- Create Page-->
                            <div class="col-2">
                                <a href="{{ route('program.create') }}" class="btn btn-primary " style="margin-top:15px;">+
                                    Add Program</a>
                            </div>

                        </div>


                        <!-- Table with stripped rows -->
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <b>No</b>
                                    </th>
                                    <th>Program Type</th>
                                    <th>Price</th>
                                    <th>Created At </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $program->programType }}</td>
                                        <td>RM{{ $program->price }}</td>
                                        <td>{{ $program->created_at->format ('d F Y') }}</td>
                                        @if ($program->status == 'Deactivate')
                                            <td>

                                                <span class="badge bg-danger ">Deactivate</span>
                                            </td>
                                        @else
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        @endif
                                        <td>
                                            <!-- View Page-->
                                            <a href="{{ route('program.show', ['program' => $program['id']]) }}"
                                                class="action-icon text-secondary"><i class="ri-eye-fill"></i></a>
                                            <!-- Edit Page-->
                                            <a class="ri-file-edit-line text-success" data-bs-toggle="modal"
                                                data-bs-target="#basicModal-{{ $program->id }}">
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="basicModal-{{ $program->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Status</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('program.store') }}/{{ $program->id }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                  <input type="text" class="form-control" id="floatingName" name="programType" value="{{ $program->programType }}" readonly>
                                                                  <label for="floatingName">Program Type</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-floating">
                                                                  <input type="text" class="form-control" id="floatingName" name="price" value="RM {{ $program->price }}" readonly>
                                                                  <label for="floatingName">Price</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-12">
                                                                <div class="form-floating">
                                                                    <select class="form-select" id="floatingSelect" aria-label="status" name="status"   value="{{ $program->status }}">
                                                                        <option value="Active" {{ $program->status == 'Active' ? 'selected' : '' }}>Active</option>
                                                                        <option value="Deactivate" {{ $program->status == 'Deactivate' ? 'selected' : '' }}>Deactivate</option>
                                                                    </select>
                                                                    <label for="floatingSelect">Status Program</label>
                                                              </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
