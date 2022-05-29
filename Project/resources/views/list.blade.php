@extends('layout')


@section('content')
<h1 class="text-center">list of Restaurant</h1>
@if(Session::get('add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   {{Session::get('add')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif
@if(Session::get('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Restaurant removed successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<table class="table ">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)

    <tr>
      <th scope="row">{{$d['id']}}</th>
      <td>{{$d['name']}}</td>
      <td>{{$d['email']}}</td>
      <td>{{$d['address']}}</td>
      <td><span class="mx-3"><a href="delete/{{$d['id']}}"><i class="fa fa-trash"></i></a></span><a href="edit/{{$d['id']}}"><i class="fa fa-edit"></i></a></td>
 

    </tr>
    @endforeach

     
  </tbody>
</table>
 @stop
 

