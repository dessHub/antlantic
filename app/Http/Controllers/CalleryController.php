<?php

namespace App\Http\Controllers;

use App\Property;
use App\Callery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Storage;

class CalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('callery.create');
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
            'image' => 'required|image|mimes:jpeg,png, jpg,gif,svg|max:2048',
        );

        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failde -----
        if ($validator->fails()) {
         
           // get the error messages from the validator 
           $messages = $validator->messages();

           // redirect user back to the form with the errors from validator
           $id = Input::get('property_id');
           return redirect()->route('callery.show', $id)
              ->withErrors($validator);

         } else {

            // validation successfull ----
             $id = Input::get('property_id');
             $callery = new Callery;
             $callery->property_id = Input::get('property_id');
               $image = $request->file('image');
               $imageName =  time().'.'.$request->file('image')->getClientOriginalExtension();
               $s3 = \Storage::disk('s3');
               $filePath = '/nzuri/' . $imageName;
               $s3->put($filePath, file_get_contents($image), 'public');
             $callery->image = $filePath;
             $callery->save();

             return redirect()->route('callery.show', $id); 

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
        $property= Property::find($id);
        $calleries = Callery::where('property_id', $id)->get();
        return view('callery.create', compact('property', 'calleries'));
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
        Callery::destroy($id);
        $prop = Callery::find($id);
        
        $prop_id = $prop->property_id;
        
        return redirect()->route('callery.show', $prop_id)
            ->with('success', "Deleted Successfully");
    }
}
