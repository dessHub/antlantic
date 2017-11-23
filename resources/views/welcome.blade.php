@extends('layouts.app')

@section('content')

<div class="banner" style="background: url('/images/pic1.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">

<div class="container">
 <div class="col-md-12 text-center">
   <div class=" col-md-12 hidden-xs" style="height:120px;"></div>
   <div class=" hidden-lg col-xs-12 " style="height:40px;"></div>
   <div class="home-title "><h3>Find the right home and the right neighborhood </h3></div>
   <div class=" col-md-12 hidden-xs" style="height:60px;"></div>
   <div class=" hidden-lg col-xs-12 " style="height:40px;"></div>
  <!-- <div class="banner-menus">
    <span><button class="btn btn-default">Buy</button></span>
    <span>< button class="btn btn-default">Buy</button></span>
  </div> -->
   <div class="home-search" style="background-color:;">
     <form class="form-horizontal" method="POST" action="{{ url('/search') }}">
         {{ csrf_field() }}

      <div class="col-md-offset-3 col-md-6 col-xs-12 search-well" >
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
   </div>
 </div>
</div>

</div>

<div class="container" style="">

 <div class="row">
  <div class="col-md-12 col-xs-12 flex-row">
    <div class="col-md-8 col-xs-12"><h3>Featured Properties</h3></div>
    <div class="col-md-4 col-xs-12"><h5><a href="#"></a></h5></div>
    <div class="col-md-4 col-xs-12">
      <div class="item-front">
      <div class="front-img">
       <span style="">Cottage</span>
       <img class="img-responsive " src="/images/pic1.jpg" alt="">
     </div>
       <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
       <h4><strong>3 Bed Apertment</strong></h4>
       <h6>KES. 70,000</h6>
       <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
     </div>
       <div class="item-bottom">
        <span><i class="fa fa-bed"></i>3</span>
        <span><i class="fa fa-car"></i>2</span>
        <span><i class="fa fa-shower"></i>1</span>
       </div>

      </div>

    </div>
      <div class="col-md-4 col-xs-12">
        <div class="item-front">
        <div class="front-img">
         <span style="">Apertments</span>

         <img class="img-responsive " src="/images/pic3.jpg" alt="">
       </div>
         <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
         <h4><strong>3 Bed Apertment</strong></h4>
         <h6>KES. 70,000</h6>
         <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
       </div>
         <div class="item-bottom">
          <span><i class="fa fa-bed"></i>3</span>
          <span><i class="fa fa-car"></i>2</span>
          <span><i class="fa fa-shower"></i>1</span>
         </div>

        </div>

      </div>
      <div class="col-md-4 col-xs-12">
        <div class="item-front">
        <div class="front-img">
         <span style="">Cottage</span>

         <img class="img-responsive " src="/images/pic1.jpg" alt="">
       </div>
         <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
         <h4><strong>3 Bed Apertment</strong></h4>
         <h6>KES. 70,000</h6>
         <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
       </div>
         <div class="item-bottom">
          <span><i class="fa fa-bed"></i>3</span>
          <span><i class="fa fa-car"></i>2</span>
          <span><i class="fa fa-shower"></i>1</span>
         </div>

        </div>

      </div>
        <div class="col-md-4 col-xs-12">
          <div class="item-front">
          <div class="front-img">
           <span style="">Apertments</span>

           <img class="img-responsive " src="/images/pic3.jpg" alt="">
         </div>
           <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
           <h4><strong>3 Bed Apertment</strong></h4>
           <h6>KES. 70,000</h6>
           <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
         </div>
           <div class="item-bottom">
            <span><i class="fa fa-bed"></i>3</span>
            <span><i class="fa fa-car"></i>2</span>
            <span><i class="fa fa-shower"></i>1</span>
           </div>

          </div>

        </div>
        <div class="col-md-4 col-xs-12">
          <div class="item-front">
          <div class="front-img">
           <span style="">Cottage</span>

           <img class="img-responsive " src="/images/pic1.jpg" alt="">
         </div>
           <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
           <h4><strong>3 Bed Apertment</strong></h4>
           <h6>KES. 70,000</h6>
           <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
         </div>
           <div class="item-bottom">
            <span><i class="fa fa-bed"></i>3</span>
            <span><i class="fa fa-car"></i>2</span>
            <span><i class="fa fa-shower"></i>1</span>
           </div>

          </div>

        </div>
        <div class="col-md-4 col-xs-12">
          <div class="item-front">
          <div class="front-img">
           <span style="">Apertments</span>

           <img class="img-responsive " src="/images/pic3.jpg" alt="">
         </div>
           <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:2px;">
           <h4><strong>3 Bed Apertment</strong></h4>
           <h6>KES. 70,000</h6>
           <p>5 bedroom mansion is on sale at prime area of Nyali off links road. The house consists of spacious ..more.</p>
         </div>
           <div class="item-bottom">
            <span><i class="fa fa-bed"></i>3</span>
            <span><i class="fa fa-car"></i>2</span>
            <span><i class="fa fa-shower"></i>1</span>
           </div>

          </div>

        </div>
  </div>
</div>
</div>





@endsection
