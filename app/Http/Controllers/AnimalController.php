<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all()->toArray();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('animals.create');
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
        'name' =>'required',
        'dob'=>'required',
      ]);
        //create new animals

        $animal = new Animal;
       $animal ->image = $request->image;
        $animal ->name = $request->input('name');
        $animal ->type = $request->input('type');
        $animal ->dob = $request->input('dob');
        $animal ->description = $request->input('desc');
        $animal ->state = $request->input('state');
        $animal->save();

        return back()->with('success','Successfully registered animal');
        echo 'alert(Registration success)'; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $animal = Animal::find($id);
        return view('animals.show',compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      $animal = Animal::find($id);
      return view('animals.edit',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {$animal = Animal::find($id);
      $this->validate(request(), [
         'name' => 'required',
          'dob' =>'required|date'
        ]);
        $animal->image = $request->input('image');
        $animal->name = $request->input('name');
        $animal->description = $request->input('description');
        $animal->type = $request->input('type');
        $animal->dob = $request->input('dob');
        $animal->state = $request->input('state');
        $animal->updated_at = now();

        //Handles the uploading of the image
        if ($request->hasFile('image')){
          //Gets the filename with the extension
$fileNameWithExt = $request->file('image')->getClientOriginalName();
//just gets the filename
$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
//Just gets the extension
$extension = $request->file('image')->getClientOriginalExtension();
//Gets the filename to store
$fileNameToStore = $filename.'_'.time().'.'.$extension;

//Uploads the image
$path = $request->file('image')->storeAs('public/images', $fileNameToStore);
} else {
  $fileNameToStore = 'noimage.jpg';
}

$animal->image = $fileNameToStore;

$animal->save();
return redirect('animals')->with('success','Animal has been updated');

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
}
