@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h5 class="card-title">Experience</h5>
                </div>
                <form action="{{ route('experience.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Position</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Position" value="{{ $data->judul }}">
                    </div>

                    <div class="mb-3">
                        <label for="info1" class="form-label">Company</label>
                        <input type="text" class="form-control" name="info1" id="info1" placeholder="Company" value="{{ $data->info1 }}">
                    </div>

                    <div class="mb-3 row">
                        <div class="col">
                            <label for="starteddate" class="form-label">Started Date</label>
                            <input type="date" class="form-control" name="starteddate" id="starteddate" value="{{ $data->starteddate }}">
                        </div>
                        <div class="col">
                            <label for="enddate" class="form-label">End Date</label>
                            <input type="date" class="form-control" name="enddate" id="enddate" value="{{ $data->enddate }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea class="form-control summernote" name="isi" id="isi" rows="10">{{ $data->isi }}</textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('experience.index') }}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
