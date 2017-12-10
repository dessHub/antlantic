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
     <form class="form-horizontal" method="POST" action="{{ url('/homes/search') }}">
         {{ csrf_field() }}

      <div class="col-md-offset-3 col-md-6 col-xs-12 search-well" >
       <div class="col-md-5 col-xs-12" style="margin-right : 0px; " >
               <select class="form-control selectwidthauto" id="category" name="category" required="true" value="{{ old('category') }}" style="background-color : white;">
                 <option  value="">Select Category </option>
                 <option  value="Apartment">Apartments</option>
                 <option value="Cottage">Cottage/Holiday Homes</option>
               </select>
       </div>
       <div class="hidden-md hidden-lg col-xs-12"></div>

       <div class="col-md-5 col-xs-12" style="margin-left : 0px; margin-right : 0px; " >
              <select class="form-control" id="location" name="location" required="true" value="{{ old('location') }}" style="background-color : white">
                <option  value="">Select Location</option>
                <option  value="All">All</option>
                <option  value="Mombasa Island">Mombasa Island</option>
                <option  value="Nyali">Nyali</option>
                <option  value="Bamburi">Bamburi</option>
                <option  value="Shanzu">Shanzu</option>
                <option  value="Mtwapa">Mtwapa</option>
                <option  value="Kikambala">Kikambala</option>
                <option  value="Kilifi">Kilifi</option>
                <option  value="Kwale">Kwale</option>
                <option  value="Diani">Diani</option>
                <option  value="Malindi">Malindi</option>
                <option  value="Mikindani">Mikindani</option>
                <option  value="Shimanzi">Shimanzi</option>
                <option  value="Changamwe">Changamwe</option>
                <option  value="North Coast">North Coast</option>
                <option  value="Shanzu">Shanzu</option>
                <option  value="Serena">Serena</option>
                <option  value="Diani">Diani</option>
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

      @foreach($properties as $key )
      <div class="col-md-4 col-xs-12">
        <div class="item-front">

        <div class="front-img">
         <span style="">{{ $key->category }}</span>

         <img class="img-responsive " src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" width="100%" height="100%" alt="">
       </div>

         <div class="item-cont" style="padding-top:5px; padding-left:10px; padding-right: 10px; padding-bottom:15px;">
         <h4><strong>{{ $key->title }}</strong></h4>
         <h6>KES. {{ $key->price }}</h6>
         <div class="item-bottom">
          <span><i class="fa fa-bed"></i>3</span>
          <span><i class="fa fa-car"></i>2</span>
          <span><i class="fa fa-shower"></i>1</span>
         </div>

       <p>{{ $key->street }}</p>
       <div class="" style="margin-bottom: 15px;">
       <span>{{ $key->location}}</span>
       <span class="pull-right" style="margin-bottom:15px;"><a href="{{ route('homes.show', $key->id)}}"><button class="btn btn-success">View</button></a></span>
       </div>

      </div>

    </div>
</div
</div>

      @endforeach


  </div>
</div>
  {{ $properties->links() }}

</div>





@endsection
