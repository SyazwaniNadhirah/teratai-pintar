@extends('layouts.adminBase')
  
  </aside><!-- End Sidebar-->
@section('content')
<div class="container">
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
   <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List User</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>
                    <b>N</b>o
                  </th>
                  <th>
                    <b>N</b>ame
                  </th>
                  <th>Email.</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($users as $user)
                  <td>{{ $user->index + 1 }}</td>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->email}}</td>
                </tr>
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