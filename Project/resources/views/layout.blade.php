<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      span{
        color: red;
      }
    </style>

  </head>
  <body>
      <header>
      <nav class="navbar navbar-expand-sm navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/list">List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/add">Add</a>
        </li>
        <li class="nav-item">
        </li>
        @if(Session::get('user'))

        <li class="nav-item">
          <a class="nav-link active fw-bold text-decoration-underline" href="/">Welcome{{Session::get('user')}}</a>
        </li>

        @endif 

        </li>
      </ul>
      <form class="d-flex" role="search">
        
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        @if(Session::get('user'))
         <button  class="btn btn-danger mx-2"><a class="nav-link" href="/logout">Logout</a></button>

        @else



        <button  class="btn btn-success mx-2"><a class="nav-link" href="/login">Login</a></button>
        <button  class="btn btn-success"><a class="nav-link" href="/register">register</a></button>
        @endif 
      </form>
    </div>
  </div>
</nav>
      </header>
      <div class="container">
      @yield('content')
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>