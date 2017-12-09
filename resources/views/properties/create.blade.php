@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
   <div class="col-md-12 col-xs-12">
     <div class="property-search">
       <form class="form-horizontal" method="POST" action="{{ route('homes.store') }}" enctype="multipart/form-data">
           {{ csrf_field() }}


        <div class="col-md-12 col-xs-12 property-form" >

       <div class="col-md-6 col-xs-12">
        <div class=" col-md-6 col-xs-12">
         <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Property Title" required autofocus>

          @if ($errors->has('title'))
           <span class="help-block">
             <strong>{{ $errors->first('title') }}</strong>
            </span>
           @endif
         </div>

         <div class="col-md-6 col-xs-12" style="margin-right : 0px; " >
                 <select class="form-control " id="category" name="category" required="true" value="{{ old('category') }}" style="background-color : white;">
                   <option  value="">Select Category</option>
                   <option  value="Apartment">Apartment/Houses</option>
                   <option  value="Cottages">Cottages/Holidays</option>
                 </select>
         </div>
         <div class="hidden-md hidden-lg col-xs-12"></div>

         <div class="col-md-6 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
                <select class="form-control" id="type" name="type" required="true" value="{{ old('type') }}" style="background-color : white">
                  <option  value="">Select Type</option>
                  <option  value="Sale">For Sale</option>
                  <option  value="Rent">For Rent</option>
                </select>
        </div>

         <div class="hidden-md hidden-lg col-xs-12"></div>

         <div class="col-md-6 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
                <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="background-color : white">
                  <option  value="">Select Location</option>
                  <option  value="Island">Island</option>
                </select>
        </div>

        <div class="hidden-md hidden-lg col-xs-12"></div>

       <div class=" col-md-6 col-xs-12">
            <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" placeholder="Street/location" required autofocus>

                @if ($errors->has('street'))
                    <span class="help-block">
                        <strong>{{ $errors->first('street') }}</strong>
                    </span>
                @endif
        </div>

      <div class="col-md-6 col-xs-12" style="margin-right : 0px; " >
              <select class="form-control " id="bed" name="bed" required="true" value="{{ old('bed') }}" style="background-color : white;">
                <option  value="">Select Bedrooms</option>
                <option  value="0">0</option>
                <option  value="1">1</option>
                <option  value="2">2</option>
                <option  value="3">3</option>
                <option  value="4">4</option>
                <option  value="5">5</option>
                <option  value="6">6</option>
              </select>
      </div>
      <div class="hidden-md hidden-lg col-xs-12"></div>

      <div class="col-md-6 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
             <select class="form-control" id="bath" name="bath" required="true" value="{{ old('bath') }}" style="background-color : white">
               <option  value="">Select Bathrooms</option>
               <option  value="0">0</option>
               <option  value="1">1</option>
               <option  value="2">2</option>
               <option  value="3">3</option>
               <option  value="4">4</option>
               <option  value="5">5</option>
               <option  value="6">6</option>
             </select>
     </div>

      <div class="hidden-md hidden-lg col-xs-12"></div>

      <div class="col-md-6 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
             <select class="form-control" id="parking" name="parking" required="true" value="{{ old('parking') }}" style="background-color : white">
               <option  value="">Select Parking</option>
               <option  value="0">0</option>
               <option  value="1">1</option>
               <option  value="2">2</option>
               <option  value="3">3</option>
               <option  value="4">4</option>
               <option  value="5">5</option>
               <option  value="6">6</option>
             </select>
     </div>


      <div class=" col-md-6 col-xs-12">
      <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Property Price" required autofocus>

       @if ($errors->has('price'))
        <span class="help-block">
          <strong>{{ $errors->first('price') }}</strong>
         </span>
        @endif
      </div>

      <div class=" col-md-6 col-xs-12">
       <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" placeholder="Property Image" required autofocus>

        @if ($errors->has('image'))
         <span class="help-block">
           <strong>{{ $errors->first('image') }}</strong>
          </span>
         @endif
       </div>
     </div>

     <div class="col-md-6 col-xs-12 ">
       <div class="form-group">
           <strong>Property Details:</strong>
           <textarea class="form-control summernote" id="summernote" name="details" rows="7" required autofocus></textarea>
       </div>
    </div>

         <div class="hidden-md hidden-lg col-xs-12"></div>
          <div class="col-md-2 col-xs-12" >
                   <button type="submit" class="btn btn-default text-center" >
                       <i class="fa fa-add"></i> SUBMIT
                   </button>
         </div>
       </div>
       </form>

     </div>

   </div>
 </div>
</div>


@endsection
