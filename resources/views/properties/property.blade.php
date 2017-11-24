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
  <div class="col-md-4 col-xs-12" style="margin-top:-35px;">
   <div class="page-header"><h3>Leave a Message</h3></div>
   <div class="property-contact">

   </div>
  </div>

  <!-- Contact Form Starts -->
  </div>
</div>
</div>

@endsection
