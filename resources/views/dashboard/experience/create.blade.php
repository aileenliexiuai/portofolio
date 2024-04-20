@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Experience</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('experience.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Position</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Position" value="{{ Session::get('judul') }}">
                            </div>

                            <div class="mb-3">
                                <label for="info1" class="form-label">Company</label>
                                <input type="text" class="form-control" name="info1" id="info1" placeholder="Company" value="{{ Session::get('info1') }}">
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
                                <label for="isi" class="form-label">Description</label>
                                <textarea class="form-control summernote" name="isi" id="isi" rows="5">{{ Session::get('isi') }}</textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('experience.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
