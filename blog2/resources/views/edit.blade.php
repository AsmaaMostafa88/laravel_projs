@extends('layouts/app')
@section('content')

<form action="/posts/{{$post->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <input type="text"class="form-control" name="title" value="{{$post->title}}" placeholder="title"><br>
    <input type="text" class="form-control"name="posted_by" value="{{$post->posted_by}}" placeholder="posted_by"><br>
    <input type="text" class="form-control"name="created_at" value="{{$post->created_at}}" placeholder="created_at"><br>
    <input type="submit"class="btn btn-primary" name="add">

</form>
@endsection