@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 ">
      <div class="card">
        <div class="card-header">Edit and update the animal</div>
         @if ($errors->any())
         <div class="alert alert-danger">
           <ul>@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br/>
           @endif
           @if (\Session::has('success'))
           <div class="alert alert-success">
             <p>{{ \Session::get('success') }}</p>
           </div><br/>
            @endif

            <div class="card-body">
<form class="form-horizontal" method="POST" action="{{ action('AnimalController@update',$animal['id']) }} " enctype="multipart/form-data" >
   @method('PATCH')
   @csrf
   <div class="col-md-8">
     <label >Animal name</label>
     <input type="text" name="reg_no" value="{{$animal->name}}"/>

   </div>
   <div class="col-md-8">
     <label>Animal Type</label>
     <select name="type" value="{{ $animal->name }}">
       <option value="dog">Dog</option>
       <option value="cat">Cat</option>
     </select>
   </div>
   <div class="col-md-8">
     <label >Date of birth</label>
     <input type="date" name="date" value="{{$animal->dob}}" />
   </div>available
   <div class="col-md-8">
     <label >Status</label>
     <input type="text" name="state" value="{{$animal->state}}" />
   </div>
   <div class="col-md-8">
     <label >Description</label>
     <textarea rows="4" cols="50" name="description" > {{$animal->description}}
     </textarea>
   </div>
   <div class="col-md-8">
     <label>Image</label>
     <input type="file" name="image" />
   </div>

   <div class="col-md-6 col-md-offset-4"
   ><input type="submit" class="btn btn-primary" />
   <input type="reset" class="btnbtn-primary" />
 </a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
 @endsection
