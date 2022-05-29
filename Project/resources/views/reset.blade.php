@extends('layout')
@section('content')
<h1 class="text-center my-3">Search Your Emailid</h1>
@if(Session::get('reset'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{Session::get('reset')}}  
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container text-bg-light p-3">
<form action="/passwordreset" method="POST">
    @csrf
   

   <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" >
   </div>
   <div class="mb-3">

 

   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop