@extends('layouts.adminBase')
  
  </aside><!-- End Sidebar-->
@section('content')
<div class="container">
   <div class="row">
     <!-- Sales Card -->
     <div class="col-xxl-4 col-md-6">
      <div class="card shadow card info-card sales-card">
        <div class="card-body">
          <h5 class="card-title">Application <span>| Pending</span></h5>
          <div class="d-flex align-items-center">
            <div class="ps-3">
              <h4 class="bi bi-menu-app-fill">145</h4>
            </div>
          </div>
        </div>
        
      </div>
    </div><!-- End Sales Card -->

    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card shadow card info-card revenue-card">
        <div class="card-body">
          <h5 class="card-title">Program <span>| This Year</span></h5>
          <div class="d-flex align-items-center">
            <div class="ps-3">
              <h4 class="ri-book-3-line">145</h4>
            </div>
          </div>
        </div>

      </div>
    </div><!-- End Revenue Card -->

    <!-- Customers Card -->
    <div class="col-xxl-4 col-xl-12">
      <div class="card shadow card info-card customers-card">
        <div class="card-body">
          <h5 class="card-title">Activities <span>| Active</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              
            </div>
            <div class="ps-3">
              <h4 class="bi bi-people">145</h4>
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
                    <b>N</b>ame
                  </th>
                  <th>Ext.</th>
                  <th>City</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  <th>Completion</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Unity Pugh</td>
                  <td>9958</td>
                  <td>Curicó</td>
                  <td>2005/02/11</td>
                  <td>37%</td>
                </tr>
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