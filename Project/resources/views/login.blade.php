@extends('layout')
@section('content')
<h1 class="text-center my-3">Login user page</h1>
@if(Session::get('logout') || (Session::get('first')) || (Session::get('wrong')) )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{Session::get('logout')}} {{Session::get('first')}} {{Session::get('wrong')}} 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container text-bg-light p-3">
<form action="/login" method="POST">
    @csrf
   

   <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" >
   </div>
   <div class="mb-3">

   <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter your password" >
   </div>
   <div class="mb-3">
      <p>Reset your password <a href="/reset">Reset</a></p>

   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop