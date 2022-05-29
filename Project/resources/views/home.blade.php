@extends('layout')


@section('content')
<div class="container">
     <h1 class="text-center my-3">Welcome: {{Session::get('user')}}</h1>

</div>
@if(Session::get('login'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{Session::get('login')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h2 class="text-center my-10">To add your Restaurant click here <a href="/add">Add</a></h2>

 @stop