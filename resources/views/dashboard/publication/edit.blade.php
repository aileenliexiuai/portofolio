@extends('dashboard.layout')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Publication</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('publication.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Title</label>
                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Title" value="{{$data->judul}}">
                            </div>

                            <div class="mb-3">
                                <label for="info1" class="form-label">Publication/Publisher</label>
                                <input type="text" class="form-control" name="info1" id="info1" placeholder="Publication/Publisher" value="{{$data->info1}}">
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="starteddate" class="form-label">Publication Date</label>
                                    <input type="date" class="form-control" name="starteddate" id="starteddate" value="{{$data->starteddate}}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="info2" class="form-label">Publication URL</label>
                                <input type="text" class="form-control" name="info2" id="info2" placeholder="Publication URL" value="{{$data->info2}}">
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('publication.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
