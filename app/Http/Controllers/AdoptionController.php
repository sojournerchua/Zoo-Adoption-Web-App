<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdoptRequest;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $adopt_requests = AdoptRequest::all()->toArray();
         return view('adopt_requests.index', compact('adopt_requests'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
        'email' =>'required',
        'animalid' =>'required',
      ]);

        //create new animals
        AdoptRequest::create([
        //  'animalid' => $request->animalid,
          'email' => $request->email,
          'animalid' => $request->animalid,

        ]);
        // $table = new Request;
        // $table ->username = $request->input('username');
        // $table ->id = $request->input('animalid');
        //$animal ->dob = $request->input('dob');

        // $animal->save();
        // $animal->save();
        return back()->with('success','Successfully requested adoption');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userreq($id)
    {
      return view('userreq');

    }

    public function availablereqindex()
    {
      $adopt_requests = AdoptRequest::all();
      return view('animals/available',['adopt_requests' => $adopt_requests]);

    }

}
