@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('halaman.index')}}" 
        class="btn btn-secondary"> 
    << back </a>
    </div>

    <form action="{{route('halaman.update', $data->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Judul</label>
            <input
                type="text"
                class="form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Judul" value="{{$data->judul}}"
            />
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <div class="mb-3">
                <label for="isi" class="form-label"></label>
                <textarea class="form-control summernote" name="isi" id="isi" rows="10">{{$data->isi}}</textarea>
            </div>
            <button class="btn btn-primary" name="Save" type="submit">Save</button>
        </div>
    </form>
@endsection

