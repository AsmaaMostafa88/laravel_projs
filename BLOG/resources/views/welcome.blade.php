<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>
        div{
            width: 700px;
            height:550px;
            margin: 60px auto;
        }
        
    </style>
    </head>
<body>

    <div>
     
     

<table border="2" class="table table-striped" align="center" cell-spacing="2px">
<a href="/create" role="button"class="btn btn-success" >create post</a>
    <tr >
        <th>Pagnition in lab 2</th>
        <th>Title</th>
        <th>Posted By</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
    @foreach($posts as $key)
        <tr>
        <td>{{$key['id']}}</td>
        <td>{{$key['posted_by']}}</td>
        <td>{{$key['title']}}</td>
        <td>{{$key['created_at']}}</td>
        <td>
            <a href="/show" role="button"  class="btn btn-success">show</a> 
            <a href="/edit" role="button" class="btn btn-primary">edit</a>
            <a href="/delete"role="button" class="btn btn-danger" >delete</a>
        </td>
        </tr>
@endforeach


</table>
    </div>
</body>
</html>