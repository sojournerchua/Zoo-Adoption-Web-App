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

                    <h2>Welcome, rescue a furry friend today!</h2><br>
                    <a href="{{url('staffhome')}}">Staff home</a><br>
                    <a href="{{url('available')}}" class="button">View adoption requests</a>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>name</th>
                          <th>type</th>
                          <th>dob</th>
                          <th>description</th>
                          <th>state</th>
                          <th colspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($animals as $animal)

                        <tr>
                          <td>{{$animal['name']}}</td>
                          <td>{{$animal['type']}}</td>
                          <td>{{$animal['dob']}}</td>
                          <td>{{$animal['description']}}</td>
                          <td>{{$animal['state']}}</td>


                             <td>
                               <form method="post" action="{{route('adoption.store')}}">
                                 @csrf
                                 <input type="hidden" name="animalid" value="{{$animal['animalid']}}">
                                 <input type="hidden" name="email" value="{{Auth::user()->email}}">
                               <button type="submit" class="btn btn-warning">Request to adopt</a></td>
                                <!-- $username = {{Auth::user()->username}};
                                $id = {{Auth::user()->username}}; -->
                              </form>
                             </tr>


                              @endforeach
                            </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
