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
        <h1>Class</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Class</li>
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
                                <h5 class="card-title">List Class</h5>
                            </div>
                            <!-- Create Page-->
                            <div class="col-2">
                                <a href="{{ route('class.create') }}" class="btn btn-primary " style="margin-top:15px;">+
                                    Add Class</a>
                            </div>

                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <b>No</b>
                                    </th>
                                    <th>Class</th>
                                    <th>Created At </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $class->name }}</td>
                                        <td>{{ $class->created_at->format ('d F Y') }}</td>
                                        <td>
                                            <!-- View Page-->
                                            <a href="{{ route('class.show', ['class' => $class['id']]) }}"
                                                class="action-icon text-secondary"><i class="ri-eye-fill"></i></a>
                                                 <!-- Delete Page - Only show when status is not 'Approved' -->
                                                 <a class="ri-delete-bin-7-fill text-danger" data-bs-toggle="modal"
                                                     data-bs-target="#basicModal-{{ $class->id }}"></a>
                                             <!-- End Delete Page-->
                                        </td>
                                    </tr>
                                     <!-- Delete Modal -->
                                     <div class="modal fade" id="basicModal-{{ $class->id }}" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Class</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure want to delete this data?</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form method="POST"
                                                        action={{ route('class.destroy', $class->id) }}>
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
