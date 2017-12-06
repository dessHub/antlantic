@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

    @if($message = Session::get('success'))
     <div class="alert alert-success">
     <p>{{ $message }}</p>
     </div>
   @endif
    <div class="col-md-offset-2 col-md-8 col-xs-12">
     <div class="add-callery">
       <form class="form-horizontal" method="post" action="{{ route('callery.store') }}" enctype="multipart/form-data">
       {{ csrf_field()}}

          <div class="col-md-offset-1 col-md-3 col-xs-12">
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
             <div class="col-md-12 col-xs-12">
            <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" required autofocus>
             
            @if ($errors->has('image'))
                <span class="image">
                  <strong>{{ $errors->first('image') }} </strong>
                </span>
            @endif 
            </div>
            </div>
            <input id='id' type="hidden" class="form-control" name="property_id" value="{{ $property->id }}" > 
          </div>
 
          <div class="hidden-md hidden-lg col-xs-12"></div>
      
          <div class="col-md-4 col-xs-offset-1 col-xs-6">
            <div class="">
             <button type="submit" class="btn btn-default text-center">
                 <i class="fa fa-upload"></i>
                Upload
             </button>
            </div>
          </div>
       </form>
     </div>

<!--- Property Callery -->
<div class="callery">
   <div class="page-header"><h3>Callery</h3></div>
    @foreach($calleries as $key)
    <div class="col-md-4 col-xs-12">
      <img class="img-responsive thumbnail" src="https://s3.eu-west-1.amazonaws.com/nzuri{{$key->image}}" alt="Property Image">
      <span>
         {!! Form::open(['method' => 'DELETE', 'route' => ['callery.destroy', $key->id], 'style' => 'display:inline']) !!}"
         {!! Form::submit('Delete', ['class' => 'btn btn-danger' ]) !!}
         {!! Form::close() !!}
      </span>
    </div>   
   @endforeach
</div> 
    </div>
  </div>
</div>


@endsection

