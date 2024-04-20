@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit Photo in Gallery</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('gallery.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title"  placeholder="Title" value="{{$data->title}}">
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="isi" class="form-label">Description</label>
                                <textarea class="form-control summernote" name="isi" id="isi" rows="5">{{ $data->isi }}</textarea>
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
