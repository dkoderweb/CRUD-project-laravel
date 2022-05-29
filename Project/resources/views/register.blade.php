@extends('layout')
@section('content')
<h1 class="text-center my-3">User Register page</h1>
<div class="container text-bg-light p-3">
 
<form action="/register" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter your Name" >
   </div>
   <div class="mb-3">

   <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" >
    <span>@error('email'){{$message}}@enderror</span>
   </div>
   <div class="mb-3">

   

   <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter your password" >
   </div>
   <div class="mb-3">

   <label for="exampleInputEmail1" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="contact" placeholder="Enter your Contact Number" >
    <span>@error('contact'){{$message}}@enderror</span>

   </div>
    
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop