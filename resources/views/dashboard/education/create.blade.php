@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Education</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('education.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">School</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="School" value="{{ Session::get('judul') }}">
                            </div>

                            <div class="mb-3">
                                <label for="info1" class="form-label">Degree</label>
                                <input type="text" class="form-control" name="info1" id="info1" placeholder="Degree" value="{{ Session::get('info1') }}">
                            </div>

                            <div class="mb-3">
                                <label for="info2" class="form-label">Field of study</label>
                                <input type="text" class="form-control" name="info2" id="info2" placeholder="Field of study" value="{{ Session::get('info2') }}">
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="starteddate" class="form-label">Started Date</label>
                                    <input type="date" class="form-control" name="starteddate" id="starteddate" value="{{ Session::get('starteddate') }}">
                                </div>
                                <div class="col">
                                    <label for="enddate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="enddate" id="enddate" value="{{ Session::get('enddate') }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="info3" class="form-label">Skills</label>
                                <input type="text" class="form-control" name="info3" id="info3" placeholder="Skills" value="{{ Session::get('info3') }}">
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('education.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
