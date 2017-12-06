<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Storage;

class MailController extends Controller
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
        $rules = array(
            'name' => 'required|max:100|',
            'email' => 'required|max:100',
            'message' => 'required|max:600',
        );

        $id = Input::get('id');
        $validator = Validator::make(Input::all(), $rules);

        // Check if validator failed----
        if ($validator->fails()) {

            //get the error messagees from the validator
            $messages = $validator->messages();

            // Redirect user back to the form with the errors from the validator.
            return Redirect::to('/homes/show'. $id)
                ->withErrors($validator);

        } else {
            // validation successful ----

            $mail = new Mail;
            $mail->name = Input::get('name');
            $mail->phone = Input::get('phone');
            $mail->code = Input::get('code');
            $mail->email = Input::get('email');
            $mail->message = Input::get('message');
            
            $mail->save();
           
            return redirect()->route('homes.show', $id);
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
}
