<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Mail;
use Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::get();
        return view('properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $rules = array(

             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         );

         $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

       // get the error messages from the validator
       $messages = $validator->messages();

       // redirect our user back to the form with the errors from the validator
       return Redirect::to('/homes/create')
           ->withErrors($validator);

    } else {
       // validation successful ---------------------------

       // report has passed all tests!
       // let him enter the database
       $cod_s = str_random(3);
       $cod_m = str_random(3);
       $cod_e = str_random(4);
       $code = $cod_s.$cod_m.$cod_e;
       // create the data for report
       $property= new Property;
       $property->category     = Input::get('category');
       $property->title     = Input::get('title');
       $property->type     = Input::get('type');
       $property->street     = Input::get('street');
       $property->location     = Input::get('location');
       $property->price     = Input::get('price');
       $property->bed    = Input::get('bed');
       $property->bath     = Input::get('bath');
       $property->parking     = Input::get('parking');
       $property->status     = 'pending';
       $property->details     = Input::get('details');
       $property->code     = $code;

              $image = $request->file('image');
               $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
               $s3 = \Storage::disk('s3');
               $filePath = '/nzuri/' . $imageName;
               $s3->put($filePath, file_get_contents($image), 'public');
       $property->image = $filePath;
       $property->save();


       // redirect ----------------------------------------
       // redirect our user back to the form so they can do it all over again
       return redirect()->route('homes.show', $property->id);
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('properties.property', compact('property'));
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
}
