@extends('layouts.adminBase')

</aside><!-- End Sidebar-->
@section('content')
    <div class="container">
        <div class="pagetitle">
            <h1>Create Class</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('class.index') }}">Class</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Please Fill Form.</h5>
                    <!-- Floating Labels Form -->
                    <form role="form" method="POST" action={{ route('class.store') }} class="row g-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="name"
                                    placeholder="Name">
                                <label for="floatingName">Class Name</label>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="ProgramType" name="program_id">
                                    <option selected disabled>Please Select</option>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->programType }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">ProgramType</label>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            <h6 class="pagetitle text-secondary"> Add Skills</h6>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="skills[]"
                                    placeholder="Skills">
                                <label for="floatingName">Skills</label>
                            </div>
                        </div>
                        <div class="col-12" id="skills-container"> <!-- Add ID here -->
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" name="description[]" id="floatingTextarea" style="height: 100px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-sm" style="width:85px; margin-left:90%;"
                            onclick="addSkillsField()">Add Skills</button>
                        <div class="col-md-12" id="subjects-container"> <!-- Add ID here -->
                            <h6 class="pagetitle text-secondary"> Add Subject</h6>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" name="subject[]"
                                    placeholder="Subject">
                                <label for="floatingName">Subject</label>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-sm" style="width:100px; margin-left:90%;"
                            onclick="addSubjectsField()">Add Subject</button>

                        <div class="text-center">
                            <button type="reset" onclick="history.back()" class="btn btn-secondary">Back</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>

            <script>
                function addSkillsField() {
                    var skillsContainer = document.getElementById('skills-container');
                    var newField = document.createElement('div');
                    newField.innerHTML =
                        '<br><div class="form-floating"><input type="text" class="form-control" name="skills[]" placeholder="Skills"><label for="floatingName">Skills</label></div>';
                    newField.innerHTML +=
                        '<br><div class="form-floating"><textarea class="form-control" placeholder="Address" name="description[]" id="floatingTextarea" style="height: 100px;"></textarea><label for="floatingTextarea">Description</label></div>';
                    skillsContainer.appendChild(newField);
                }

                function addSubjectsField() {
                    var subjectsContainer = document.getElementById('subjects-container');
                    var newField = document.createElement('div');
                    newField.innerHTML =
                        '<br><div class="form-floating"><input type="text" class="form-control" name="subject[]" placeholder="Subject"><label for="floatingSubject">Subject</label></div>';
                    subjectsContainer.appendChild(newField);
                }
            </script>

        </section>
    </div>
@endsection
