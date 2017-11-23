@extends('layouts.app')

@section('content')

<div class="banner" style="background: url('/images/pic1.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">

<div class="container">
 <div class="col-md-12 text-center">
   <div class="home-title"><h3>Welcome To AtlanticHomez </h3></div>
  <!-- <div class="banner-menus">
    <span><button class="btn btn-default">Buy</button></span>
    <span>< button class="btn btn-default">Buy</button></span>
  </div> -->
   <div class="home-search" style="background-color:red;">
     <form class="form-horizontal" method="POST" action="{{ url('/search') }}">
         {{ csrf_field() }}

      <div class="col-md-12 hidden-xs">
       <div class="col-md-3 col-xs-6">
         <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">

             <div class="col-md-12">
               <select class="form-control" id="category" name="category" required="true" value="{{ old('category') }}" style="background-color : white">
                 <option  value="">Select Category</option>
                 <option  value="">Homes</option>
               </select>
             </div>
         </div>
       </div>

        <div class="col-md-3 col-xs-6" style="padding-left:-1px; padding-right:-1px; background-color:red;">
         <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">

             <div class="col-md-12" style="padding-left:-1px; padding-right:-1px; background-color:green;">
               <select class="form-control" id="type" name="type" required="true" value="{{ old('type') }}" style="background-color : white; width:100%;">
                 <option  value="">Select Type</option>
                 <option  value="">Rent</option>
               </select>
             </div>
         </div>
       </div>

       <div class="col-md-3 col-xs-8">
        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

            <div class="col-md-11">
              <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="background-color : white">
                <option  value="">Select Location</option>
                <option  value="">Island</option>
              </select>
            </div>
        </div>
      </div>

        <div class="col-md-3 col-xs-4" >
         <div class="form-group">
             <div class="col-md-12"  >
                 <button type="submit" class="btn btn-default pull-left" >
                     <i class="fa fa-search"></i>Search
                 </button>
             </div>
         </div>
       </div>
     </div>
     </form>
   </div>
 </div>
</div>

</div>




@endsection
