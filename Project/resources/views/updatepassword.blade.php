@extends('layout')
@section('content')
<h1 class="text-center my-3">Change Your Password</h1>
<div class="container text-bg-light p-3">
 
<form action="/update_pass" method="POST">
    @csrf
  <div class="mb-3">
     
 

   

   <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Enter your password" >
   </div>
   <div class="mb-3">

   
    
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop