@extends('layouts.app')

@section('content')

<div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-responsive" style="height: 65vh; width:100%;" src="/images/pic1.jpg" alt="Chania" >

      <div class="carousel-caption container">
        <div class="row">
          <div class="col-md-5 ">
            <div class="pull-left" style="background-color:white;color:black;">
             <div class="" style="padding:5px;">
              <h4>3 Bedroom Apartment</h4>
              <h5 style="color:green">Ksh .<strong>70,000</strong></h5>
              </div>
               <div style="background-color:black; color:white; margin-right:0px;">
                 <span><i class="fa fa-bed" style="color:green"></i>2</span>
                 <span><i class="fa fa-car"></i>2</span>
               </div>
             </div>

           </div>
        </div>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" style="height: 65vh; width:100%;" src="/images/pic2.jpg" alt="Chicago">
      <div class="carousel-caption container">
        <div class="row">
          <div class="col-md-5 ">
            <div class="pull-left" style="background-color:white;color:black;">
             <div class="" style="padding:5px;">
              <h4>3 Bedroom Apartment</h4>
              <h5 style="color:green">Ksh .<strong>70,000</strong></h5>
              </div>
               <div style="background-color:black; color:white; margin-right:0px;">
                 <span><i class="fa fa-bed" style="color:green"></i>2</span>
                 <span><i class="fa fa-car"></i>2</span>
               </div>
             </div>

           </div>
        </div>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" style="height: 65vh; width:100%;" src="/images/pic3.jpg" alt="New York">
      <div class="carousel-caption container">
        <div class="row">
          <div class="col-md-5 ">
            <div class="pull-left" style="background-color:white;color:black;">
             <div class="" style="padding:5px;">
              <h4>3 Bedroom Apartment</h4>
              <h5 style="color:green">Ksh .<strong>70,000</strong></h5>
              </div>
               <div style="background-color:black; color:white; margin-right:0px;">
                 <span><i class="fa fa-bed" style="color:green"></i>2</span>
                 <span><i class="fa fa-car"></i>2</span>
               </div>
             </div>

           </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container" style="">
 <div class="page-header"><h3>Featured Properties</h3></div>
 <div class="row">
  <div class="col-md-8 col-xs-12">
    <div class="col-md-6 col-xs-12">
      <div class="item-front">

       <img class="img-responsive " src="/images/pic1.jpg" alt="">
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
      <div class="col-md-6 col-xs-12">
        <div class="item-front">

         <img class="img-responsive " src="/images/pic3.jpg" alt="">
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
  <div class="col-md-4 col-xs-12">


  </div>
</div>
</div>


@endsection
