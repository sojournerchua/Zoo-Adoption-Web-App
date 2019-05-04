@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('home')}}">User home</a><br>

                    <h2>  Welcome staff! </h2>
                  <a href="available" class="button">View adoption requests</a><br>
                  <a href="animals" class="button">View all animals</a><br>
                  <a href="animals/create" class="button">Add an animal</a><br>



                </div>

            </div>
        </div>
    </div>
</div>
@endsection
