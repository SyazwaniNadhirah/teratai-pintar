@extends('layouts.adminBase')
  
  </aside><!-- End Sidebar-->
@section('content')
<div class="container">
   <div class="row">
    
     <!-- Sales Card -->
     <div class="col-xxl-3 col-xl-12">
      <div class="card shadow card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Application <span>| Current</span></h5>
          <div class="d-flex align-items-center">
            <div class="ps-3">
              <h4 class="bi bi-menu-app-fill">{{$countApplication}}</h4>
            </div>
          </div>
        </div>
        
      </div>
    </div><!-- End Sales Card -->

    <!-- Sales Card -->
    <div class="col-xxl-3 col-xl-12">
      <div class="card shadow card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Program <span>| This Year</span></h5>
          <div class="d-flex align-items-center">
            <div class="ps-3">
              <h4 class="bi bi-menu-app-fill">{{$countProgram}}</h4>
            </div>
          </div>
        </div>
        
      </div>
    </div><!-- End Sales Card -->

    <!-- Revenue Card -->
    <div class="col-xxl-3 col-xl-12">
      <div class="card shadow card info-card revenue-card">
        <div class="card-body">
          <h5 class="card-title">Class <span>| This Year</span></h5>
          <div class="d-flex align-items-center">
            <div class="ps-3">
              <h4 class="ri-book-3-line">{{$countClass}}</h4>
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Revenue Card -->

    <!-- Customers Card -->
    <div class="col-xxl-3 col-xl-12">
      <div class="card shadow card info-card customers-card">
        <div class="card-body">
          <h5 class="card-title">Feedback <span>| This Year</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            </div>
            <div class="ps-3">
              <h4 class="bi bi-people">{{$countFeedback}}</h4>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Customers Card -->
   </div>

   <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List Children</h5>
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
                  <th>IC Num.</th>
                  <th>Age.</th>
                  <th>Gender</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($child as $childs)
                  <td>{{ $childs->index + 1 }}</td>
                  <td>{{ $childs->name}}</td>
                  <td>{{ $childs->ic}}</td>
                  <td>{{ $childs->age}}</td>
                  <td>{{ $childs->gender}}</td>
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