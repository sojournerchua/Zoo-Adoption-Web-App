@extends('layouts.app')
@section('content')


<div class="container">
  <h3> <a href="{{url('staffhome')}}">Go back home</a><h3>
  <h1>Register a new Animal</h1>

  <form class="form-horizontal" action ="{{ action('AnimalController@store') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class ="input-pair">
      <label for="">Animal photo</label>
      <input type="file" name="image" value="">
    </div>

    <div class ="input-pair">
      <label for="">Name</label>
      <input type="text" name="name" value="">
    </div>

    <div class ="input-pair">
      <label for="">Type</label>
      <input type="text" name="type" value="">
    </div>

    <div class ="input-pair">
      <label for="">Date of Birth</label>
      <input type="date" name="dob" value="">
    </div>

    <div class ="input-pair">
      <label for="">Description</label>
      <input type="text" name="desc" value="">
    </div>

    <div class ="input-pair">
      <label for="">Status</label>
      <input type="text" name="state" value="">
    </div>

    <div class="input-pair"
    ><input type="submit" class="btn btn-primary" />
    <input type="reset" class="btnbtn-primary" />
  </a>
 </div>

@endsection
