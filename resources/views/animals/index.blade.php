@extends('layouts.app')
 @section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8 ">
       <div class="card">
         <div class="card-header">Display all animals</div>
         <a href="staffhome">Go back home</a>

         <div class="card-body">
           <table class="table table-striped">
             <thead>
               <tr>
                <th>ID</th>
                 <th>Name</th>
                 <th>Type</th>
                 <th>Date of birth</th>
                 <th>Description</th>
                 <th>State</th>

              
               </tr>
             </thead>
             <tbody>
               @foreach($animals as $animal)

               <tr>
                 <td>{{$animal['animalid']}}</td>
                 <td>{{$animal['name']}}</td>
                 <td>{{$animal['type']}}</td>
                 <td>{{$animal['dob']}}</td>
                 <td>{{$animal['description']}}</td>
                 <td>{{$animal['state']}}</td>


                        </form>
                      </td>
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
