@extends('layout')
@section('content')
<h1 class="text-center my-3">Edit Restaurant</h1>
<div class="container text-bg-light p-3">
<form action="/Updated" method="POST">
    @csrf
  <div class="mb-3">
  <input type="hidden"  name="id" value="{{$data['id']}}"  >

    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data['name']}}" placeholder="Enter your Name" >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"value="{{$data['email']}}" placeholder="Enter your email" >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="address" value="{{$data['address']}}" placeholder="Enter your address" >
   </div>
   
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop