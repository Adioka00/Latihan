@extends('BackOffice.layout.app')

@section('content')
{{$data}}
<div class="card">
    <div class="card-body">
        <form action="{{$data !=null ? route('admin.school.update', $data->id) : route('admin.school.store')}}"
            method="post">
            @csrf
            @if ($data !=null)
               @method('PUT')
            @endif
            <div class="form group">
                <label for="">name</label>
                <input type="text" name="name" value="{{$data->name ?? ''}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
