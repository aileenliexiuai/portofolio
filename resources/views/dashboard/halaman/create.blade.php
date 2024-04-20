@extends('dashboard.layout')

@section('konten')

    <h3> Add Page </h3>

    <form action="{{ route('halaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Title</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Enter Title"
                value="{{ Session::get('judul') }}" />
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Content</label>
            <textarea class="form-control summernote" name="isi" id="isi" rows="10"
                placeholder="Enter Content">{{ Session::get('isi') }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Back</a>

    </form>
@endsection
