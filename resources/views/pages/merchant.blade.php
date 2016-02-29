@extends('pages.template')


@section('main')
<div class="row"> 
    
    <!-- Delivery Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">Merchant</li>
      </ul>
      <h1 class="margin-bottom">Register <span>Company</span></h1>
    </div>

  </div>
 <div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'users/merchantregister','method'=>'post','files'=>'true') ) !!}
        <div class="control-group">
          <label class="control-label">Details</label>
          <div class="controls">
      {!! Form::text('merchantname',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Name')) !!}
      {!! Form::text('email',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Email')) !!}
      {!! Form::text('contactnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Contact Number')) !!}
      {!! Form::textarea('address',null,array('class'=>'form-control','required'=>'true','rows'=>'3','placeholder'=>'Address')) !!}
   
      {!! Form::text('bannermessage',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Banner Message'))!!}
      
       <label class="control-label">Password</label>
      {!! Form::password('password',null,array('class'=>'form-control','required'=>'true','placeholder'=>'password')) !!}
      <label class="control-label">Confirm Password</label>
      {!! Form::password('confirmpassword',null,array('class'=>'form-control','required'=>'true','placeholder'=>'confirm password')) !!}
          </div>
        </div>
        <div class="control-group">
            <label class="control-label">Category</label>
            <div class="controls">
                <div class="col-xs-8">
                    <select class="form-control" name="category">
                        <option value="1">Department Store</option>
                        <option value="2">General Store</option>
                    </select>
                    <label></label>

                </div>
            </div>
        </div>
     
       <div class="control-group">
            <label class="control-label">Mall</label>
            <div class="controls">
                <div class="col-xs-8">
                    <select class="form-control" name="category">
                        
                        <option value="2">Palace Mall</option>
                      
                    </select>
                    <label></label>

                </div>
            </div>
        </div>   
      
          
        <div class="control-group">
            <label class="control-label">Banner Image</label>
            <div class="controls">
                {!! Form::file('image',null,array('class'=>'form-control','required')) !!}

            </div>
        </div>
        <div class="control-group no-margin">
          <div class="controls">
            <button type="submit" class="btn ">Submit</button>
          </div>
        </div>
      {!!Form::close()!!}
    </div>
</div>


@stop