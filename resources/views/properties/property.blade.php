@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="col-md-8 col-xs-12" >
      <div class="page-header" style="margin-top:-10px;"><h3>Property Page</h3></div>
    <div class="col-md-6 col-xs-12">
     <div class="property-img text-center">
      <img class="img-responsive thumbnail" src="/images/pic3.jpg" alt="Property Image">
      <span><i class="fa fa-bed"></i> 3</span>
      <span><i class="fa fa-car"></i> 2</span>
      <span><i class="fa fa-shower"></i> 1</span>
       <div class="price"><h4>KES. 70,000 /Month</h4></div>
     </div>

    </div>
    <div class="col-md-6 col-xs-12">
      <div class="property-details">
       <div class="title"><h4>3 Bed Apertment</h4></div>
       <hr>
       <div class="content">
         <p>All 431 apartments feature open living spaces with abundant closets, over sized windows, marble bathrooms, and open kitchens with stainless steel appliances, including dishwasher, microwave, and full-size fridge & freezer. Many units also have private outdoor space.

The building offers a superb amenity package th...at includes a round the clock doorman, concierge, brand new tenants lounge, children?s game room & 12,000 sq. ft. landscaped roof deck.</p>
       </div>
      </div>
    </div>
    <div class="col-md-12 col-xs-12">
      <div class="callery">
        <div class="page-header"><h3>Callery</h3></div>
        <div class="col-md-4 col-xs-12">
         <img class="img-responsive thumbnail" src="/images/pic3.jpg">
       </div>
       <div class="col-md-4 col-xs-12">
        <img class="img-responsive thumbnail" src="/images/pic3.jpg">
      </div>
      <div class="col-md-4 col-xs-12">
       <img class="img-responsive thumbnail" src="/images/pic3.jpg">
     </div>
   </div>
  </div>
  </div>
  <!-- Property Details Ends -->
  <div class="col-md-4 col-xs-12" style="margin-top:-3px;">
   <div class="page-header"><h3>Leave a Message</h3></div>
   <div class="property-contact">
       <form class="form-horizontal" method="POST" action="{{ route('register') }}">
           {{ csrf_field() }}

           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
               <label for="name" class="col-md-12 control-label">Name</label>

               <div class="col-md-12">
                   <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                   @if ($errors->has('name'))
                       <span class="help-block">
                           <strong>{{ $errors->first('name') }}</strong>
                       </span>
                   @endif
               </div>
           </div>

           <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
               <label for="phone" class="col-md-12 control-label">Mobile No</label>

               <div class="col-md-12">
                   <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                   @if ($errors->has('phone'))
                       <span class="help-block">
                           <strong>{{ $errors->first('phone') }}</strong>
                       </span>
                   @endif
               </div>
           </div>

           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
               <label for="email" class="col-md-12 control-label">E-Mail Address</label>

               <div class="col-md-12">
                   <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                   @if ($errors->has('email'))
                       <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                       </span>
                   @endif
               </div>
           </div>

           <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
               <label for="message" class="col-md-12 control-label">Message</label>

               <div class="col-md-12">
                   <textarea id="message" type="text" class="form-control" name="message" rows="5" value="{{ old('message') }}" required autofocus></textarea>

                   @if ($errors->has('message'))
                       <span class="help-block">
                           <strong>{{ $errors->first('message') }}</strong>
                       </span>
                   @endif
               </div>
           </div>

           <div class="form-group">
               <div class="col-md-6 col-md-offset-4">
                   <button type="submit" class="btn btn-primary">
                       Submit
                   </button>
               </div>
           </div>
       </form>
   </div>
  </div>

  <!-- Contacnt Form Starts -->
  </div>
</div>
</div>

@endsection
