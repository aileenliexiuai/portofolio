@extends('dashboard.layout')

@section('konten')
   
   <h3> Skills </h3>
    <form action="{{ route('pengaturanhalaman.update') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2">About</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halamanabout">
                    <option value="">-Choose- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_halamanabout')==$item->id?'selected': ''}}>
                            {{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Interest</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halamaninterest">
                    <option value="">-Choose- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_halamaninterest')==$item->id?'selected': ''}}>
                            {{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Awards</label>
            <div class="col-sm-6">
                <select class="form-control form-control-sm" name="_halamanawards">
                    <option value="">-Choose- </option>
                    @foreach ($datahalaman as $item)
                        <option value="{{$item->id}}" {{get_meta_value('_halamanawards')==$item->id?'selected': ''}}>
                            {{$item->judul}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection