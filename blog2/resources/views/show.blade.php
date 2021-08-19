@extends('layouts/app')
@section('content')
<ul class="list-group">
    <li class="list-group-item">{{$post->title}}</li>
    <li class="list-group-item">{{$post->posted_by}}</li>
    <li class="list-group-item">{{$post->created_at}}</li>
</ul>
@endsection