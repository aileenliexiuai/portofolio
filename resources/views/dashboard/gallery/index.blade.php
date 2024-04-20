@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Gallery</p>
    <div class="pb-3"><a href="{{ route('gallery.create') }}" class="btn btn-primary">+ Add Photo</a></div>
    <div class="table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Title</th>
                    <th>Isi</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->isi }}</td> 
                        <td>
                            <img src="{{ asset($gallery->image_path) }}" alt="Image" style="max-width: 100px;">
                        </td>
                        <td>{{ $gallery->created_at }}</td>
                        <td>
                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Are you sure?')" action="{{ route('gallery.destroy', $gallery->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
