@extends('layouts.adminBase')
  
  </aside><!-- End Sidebar-->
@section('content')
<div class="container">
    <div class="pagetitle">
        <h1>Create Program</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('program.index')}}">Program</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

   <section class="section">
    <div class="card">
        <div class="card-body">
        <br>
            <p class="text-muted font-13">
               Please Insert The Program.
            </p>
          <!-- Floating Labels Form -->
          <form role="form" method="POST" action={{route('program.store')}} class="row g-3"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="ProgramType" name="programType" >
                      <option selected disabled>Please Select</option>
                      <option value="Preschool (Full Day)">Preschool (Full Day)</option>
                      <option value="Preschool (Morning)">Preschool (Morning)</option>
                      <option value="Preschool (Afternoon)">Preschool (Afternoon)</option>
                    </select>
                    <label for="floatingSelect">ProgramType</label>
                  </div>
            </div>  
            <div class="col-md-4">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" name="price" placeholder="eg:RM 800" >
                  <label for="floatingName">Price(RM)</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="file" class="form-control" id="floatingName" name="image" >
                  <label for="floatingName">Image</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" name="description" id="floatingTextarea" style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Description Program</label>
                </div>
              </div>
            <div class="text-center">
              <button type="reset" onclick="history.back()" class="btn btn-secondary">Back</button>
              <button type="submit" class="btn btn-primary">Submit</button>
             
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>
  </section>
</div>
@endsection