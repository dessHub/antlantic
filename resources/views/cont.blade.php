<div class="container" style="">

 <div class="row">
  <div class="col-md-8 col-xs-12 flex-row">
    <div class="col-md-8 col-xs-12"><h3>Featured Properties</h3></div>
    <div class="col-md-4 col-xs-12"><h5><a href="#"></a></h5></div>
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
     <div class="front-contact rounded-0">
      <div class="head"> <h4><i class="fa fa-envelope pull-left"></i>Feel Free To Contact Us</h4></div>
      <img class="img-responsive" src="/images/pic3.jpg" >
      <form class="form-horizontal" method="POST" action="{{ url('/contact') }}">
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
              <label for="phone" class="col-md-12 control-label">Phone No</label>

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
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
              <label for="content" class="col-md-12 control-label">Message</label>

              <div class="col-md-12">

                  <textarea class="form-control" rows="5" id="content" autofocus required></textarea>

                  @if ($errors->has('content'))
                      <span class="help-block">
                          <strong>{{ $errors->first('content') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-default">
                      Submit
                  </button>
              </div>
          </div>
      </form>
     </div>

  </div>
</div>
</div>
