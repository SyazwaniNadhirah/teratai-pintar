@extends('layouts.userBase')


@section('content')
    <section class="section" style="padding:20px 30px; margin-top: 60px;">
        <div class="container" style="padding:20px 30px; margin-top: 60px;">
            @if ($message = session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p class="text-black mb-0">{{ session()->get('success') }}</p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h5 class="card-title">List Application</h5>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        @if ($applications->isNotEmpty())
                            <table class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <b>No</b>
                                        </th>
                                        <th>Program Type</th>
                                        <th>Class</th>
                                        <th>Intake</th>
                                        <th>Branch</th>
                                        <th>Created At </th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $application)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $application->program->programType }}</td>
                                            <td>{{ $application->programClass->name }}</td>
                                            <td>{{ $application->year_intake }}</td>
                                            <td>{{ $application->activity->branch }}</td>
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
                                                <!-- View Page-->
                                                <a href="{{ route('application.show', ['application' => $application['id']]) }}"
                                                    class="action-icon text-secondary"><i class="ri-eye-fill"></i></a>
                                                <!-- End View Page-->

                                                <!-- Edit Page - Only show when status is not 'Approved' -->
                                                @if ($application->status != 'Approved')
                                                    <a href="{{ route('application.edit', ['application' => $application['id']]) }}"
                                                        class="action-icon text-primary"><i class="ri-edit-fill"></i></a>
                                                @endif
                                                <!-- End Edit Page-->

                                                <!-- Delete Page - Only show when status is not 'Approved' -->
                                                @if ($application->status != 'Approved')
                                                    <a class="ri-delete-bin-7-fill text-danger" data-bs-toggle="modal"
                                                        data-bs-target="#basicModal-{{ $application->id }}"></a>
                                                @endif
                                                <!-- End Delete Page-->
                                            </td>
                                        </tr>
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="basicModal-{{ $application->id }}" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Application</h5>
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
                                                            action={{ route('application.destroy', $application->id) }}>
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
                        @else
                            <script>
                                window.location = "{{ route('application.create') }}";
                            </script>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>
    </div>
@endsection
