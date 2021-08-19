<html>
    
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>
        .parent{
            width:700px;
            height: 150px;
            margin: 50px auto;
        }
        h5{
            display: inline-block;
        }
        
    </style>
    </head>
<body>
    <div  class="parent">
    <div class="card text-dark bg-light mb-3">
  <div class="card-header">Post Info</div>
  <div class="card-body">
   <div> <h5 class="card-title">Title:-</h5>special title treatment</div>
    
    <h5 class="card-title">Description:-</h5>
    <p class="card-text">with supporting text below as a natural lead-in to additional content.</p>
  </div>
</div>
    </div>
    <div  class="parent">
    <div class="card text-dark bg-light mb-3">
  <div class="card-header">Post Creator Info</div>
  <div class="card-body">
   <div> <h5 class="card-title">Name:-</h5>Ahmed</div>
   <div> <h5 class="card-title">Email:-</h5>ahmed@gmail.com</div>
   <div> <h5 class="card-title">Created At:-</h5>{{ $dt->format('l jS \\of F Y h:i:s A');}}</div>
   
   
  </div>
</div>
    </div>
</body>
</html>