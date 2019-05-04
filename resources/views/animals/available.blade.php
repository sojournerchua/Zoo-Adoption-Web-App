@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adoption requests</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





                    <a href="javascript://" onclick="history.back();">Go back</a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Adopter email</th>
                          <th>Animal ID</th>
                          <th>Animal status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($adopt_requests as $adopt)

                        <tr>
                          <td>{{$adopt['email']}}</td>
                            <td>{{$adopt['animalid']}}</td>
                          <td>{{$adopt['status']}}</td>

                             </tr>


                              @endforeach
                            </tbody>
                            </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
