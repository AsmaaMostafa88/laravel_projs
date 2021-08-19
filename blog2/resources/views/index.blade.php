@extends('layouts/app')
@section('content')

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Posted By</th>
        <th>Created At</th>
        <th></th>
        <th>Actions</th>
        <th></th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->posted_by}}</td>
        <td>{{$post->created_at}}</td>
        <td><a class="btn btn-success" href="/posts/{{$post->id}}">Show</a></td>
        <td><a class="btn btn-warning" href="/posts/{{$post->id}}/edit">Edit</a></td>
        <td>
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger"type="submit" value="Delete">
        </form>
        </td>
    </tr>
    @endforeach
</table>
<a class="btn btn-primary" href="/posts/create">Add Post</a>
@endsection