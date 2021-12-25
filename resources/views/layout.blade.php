<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
    <img src="aioulogo.png" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="/register">Thesis Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<!-- class="bg-image" style=" -->
    <!-- background-image: url('test2.jpg'); background-repeat: no-repeat;  -->
@show
<div class="content" ">
            @section('content')
          

            
  

            <h1>This is a content</h1>

            @show
        </div>

        <div class="foot fixed-bottom bg-warning">
            @section('footer')
           
            <h2 class="text-center">ALL Right Reserved</h2>
        </div>
            @show