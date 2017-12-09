<?php

namespace App\Http\Controllers;

use App\Property;
use App\Callery;
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

    public function apartment($type)
    {
        $cat = 'Apartment';
        $properties = Property::where('category', $cat)->where('type', $type)->get();
            return view('properties.index', compact('properties'));
       
    }

    public function cottage($type)
    {
        $cat = 'Cottage';
        $properties = Property::where('category', $cat)->where('type', $type)->get();
        return view('properties.index', compact('properties'));
    }

    public function search()
    {
       $cat = Input::get('category');
       $loc = Input::get('location');

       if($loc == 'All'){
           $properties =  Property::where('category', $cat)->get();
       } else {
           $properties = Property::where('category', $cat)->where('location', $loc)->get();
       }
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
        $callery = Callery::where('property_id', $id)->get();
        return view('properties.property', compact('property', 'callery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        return view('properties.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 4@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'category' => 'required',
        ]);

       $title =  Input::get('title');
       $category = Input::get('category');
       $type = Input::get('type');
       $bed = Input::get('bed');
       $bath = Input::get('bath');
       $parking = Input::get('parking');
       $price = Input::get('price');
       $location = Input::get('location');
       $street = Input::get('street');
       $details = Input::get('details');

       $prop_obj = new Property();
       $prop_obj->id = $id;
       $prop = Property::find($prop_obj->id);
       $prop->update(['title' => $title, 'category' => $category, 'bath' => $bath, 'bed' => $bed, 'bath' => $bath, 'parking' => $parking, 'price' => $price, 'location' => $location, 'street' => $street, 'details' => $details]);


       return redirect()->route('homes.show', $id)
            ->with('success', 'Property successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::destroy($id);

        return redirect()->route('homes.index')
            ->with('succes', 'Deleted successfully');
    }
}
