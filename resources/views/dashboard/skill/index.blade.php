@extends('dashboard.layout')

@section('konten')
   
   <h3> Skills </h3>
    <form action="{{ route('skill.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="_language" class="form-label">Programming Languages and Tools Skills</label>
            <input type="text" class="form-control form-control-sm skill" name="_language" id="_language" placeholder="Programming Languages and Tools Skills"
                value="{{ get_meta_value('_language') }}" >
        </div>

        <div class="mb-3">
            <label for="_others" class="form-label">Other Skills</label>
            <textarea class="form-control summernote" name="_others" id="_others" rows="10"
                placeholder="Enter Other Skills">{{ get_meta_value('_others') }}</textarea>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection

@push('child-scripts')
<script>
    $(document).ready(function() {
        $('.skill').tokenfield({
            autocomplete: {
                source: [{!! $skill !!}],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    });
  </script>
@endpush
