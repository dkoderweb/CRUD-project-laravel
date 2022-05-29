@extends('layout')
@section('content')
<h1 class="text-center my-3">Add new Restaurant</h1>
<div class="container text-bg-light p-3">
<form action="Restaurant_added" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter your Name" >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter your address" >
   </div>
   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop