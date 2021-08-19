@extends('layouts/app')
@section('content')

<h1>Create Post</h1>
<form action="/posts" method="post">
<div class="mb-3">
    @csrf
    <input type="text"  class="form-control"name="title" placeholder="title"><br>
    <input type="text" class="form-control"name="posted_by" placeholder="posted_by"><br>
    <input type="text" class="form-control"name="created_at" placeholder="created_at"><br>
    <input type="submit"class="btn btn-primary" name="add">
</div>
</form>




@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection