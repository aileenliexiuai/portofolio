@extends('dashboard.layout')

@section('konten')
<p class="card-title">Publication</p>
<div class="pb-3"><a href={{route('publication.create')}} class="btn btn-primary"> +Add Publication</a></div>
<div class="table-responsive">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th>Title</th>
                <th>Publication/Publisher</th>
                <th>Publication date</th>
                <th>Publication URL</th>
                <th class="col-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach ($data as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->info1}}</td>
                <td>{{$item->starteddate}}</td>
                <td>{{$item->info2}}</td>
                <td>
                    <a href='{{route('publication.edit',$item->id)}}' 
                    class="btn btn-sm btn-warning">Edit</a>
                    <form onsubmit="return confirm('Are you sure?')"

                    
                    action="{{route('publication.destroy', $item->id)}}"
                    class="d-inline" method="POST"> 
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" name='submit'>Del</button>
                    </form>
                    
                </td>
            </tr>
            <?php $i++;?>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection

