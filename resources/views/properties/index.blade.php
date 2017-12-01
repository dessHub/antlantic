@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="property-search">
      <form class="form-horizontal" method="POST" action="{{ url('/search') }}">
          {{ csrf_field() }}

       <div class="col-md-12 col-xs-12 search-well" >
        <div class="col-md-5 col-xs-12" style="margin-right : 0px; " >
                <select class="form-control selectwidthauto" id="category" name="category" required="true" value="{{ old('category') }}" style="background-color : white;">
                  <option  value="">Select Category</option>
                  <option  value="">Homes</option>
                </select>
        </div>
        <div class="hidden-md hidden-lg col-xs-12"></div>

        <div class="col-md-5 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
               <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="background-color : white">
                 <option  value="">Select Location</option>
                 <option  value="">Island</option>
               </select>
       </div>
        <div class="hidden-md hidden-lg col-xs-12"></div>
         <div class="col-md-2 col-xs-12" >
                  <button type="submit" class="btn btn-default text-center" >
                      <i class="fa fa-search"></i>
                  </button>
        </div>
      </div>
      </form>

    </div><br><br>

    <div class="properties">
      <div></div>
      <p style="color:blue; margin-top:20px; padding-left:20px;">Search Reasults<i class="fa fa-angle-double-right"></i><i class="fa fa-angle-double-right"></i></p>
     @foreach($properties as $key)
      <div class="col-md-4 col-xs-12">
        <div class="item-front">
        <div class="front-img">
         <span style="">{{ $key->category}}</span>
         <img class="img-responsive " src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" width="100%" height="100%" alt="">
       </div>
         <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
         <h4><strong>{{ $key->title}}</strong></h4>
         <h6>KES. {{ $key->price}}</h6>
         <div class="item-bottom">
          <span><i class="fa fa-bed"></i>{{ $key->bed}}</span>
          <span><i class="fa fa-car"></i>{{ $key->parking}}</span>
          <span><i class="fa fa-shower"></i>{{ $key->bath}}</span>
         </div>
         <p>{{ $key->street}}</p>
         <div class="" style="margin-bottom: 15px;">
         <span>{{ $key->location}}</span>
         <span class="pull-right" style="margin-bottom:15px;"><a href="{{ route('homes.show', $key->id)}}"><button class="btn btn-success">View</button></a></span>
       </div>
       </div>
        </div>

      </div>
      @endforeach



    </div>
  </div>
</div>
</div>

@endsection
