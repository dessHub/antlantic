@extends('layouts.app')

@section('content')

<div class='Container'>
 <div class="row">
  <div class="col-md-12 col-xs-12 ">

    <div class="col-md-12 col-xs-12" >
      <div class="text-center" style="badding:10px;"><h3>INQUIRY MAILS</h3></div>
   </div>
    @foreach($mails as $key)
    <div class="col-md-offset-2 col-md-8 col-xs-12" style="background-color : white;">
     <div style="margin:10px; padding:10px; ">
      <div class='col-md-4 col-xs-12'>
      <div ><strong>From</strong></div>
      <div> <span>Mail;</span> {{ $key->email }}</div>
      <div><span>Phone:</span> {{ $key->phone }}</div>
      <div><span>Name:</span> {{ $key->name }}</div>
      </div>

      <div class="col-md-6 col-xs-12">
       <div>code: <strong>{{ $key->code  }}</strong></div>
       <p>{{ $key->message }}</p>
      </div>
    </div>
</div>
    <hr>
    @endforeach
    
  </div>
 </div>
</div>

@endsection

