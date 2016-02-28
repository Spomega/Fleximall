@extends('pages.template')



@section('main')
<div class="row"> 
    
    <!-- Delivery Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">User</li>
      </ul>
      <h1 class="margin-bottom">User <span>Registration</span></h1>
    </div>

  </div>

<div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'users/register','method'=>'post') ) !!}
        <div class="control-group">
          <label class="control-label">Details</label>
          <div class="controls">
      {!! Form::text('name',null,array('class'=>'form-control','required'=>'true','placeholder'=>'name')) !!}
      {!! Form::text('email',null,array('class'=>'form-control','required'=>'true','placeholder'=>'email')) !!}
      {!! Form::text('phonenumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'phone number')) !!}
      
        <label class="control-label">Password</label>
      {!! Form::password('password',null,array('class'=>'form-control','required'=>'true','placeholder'=>'password')) !!}
      <label class="control-label">Confirm Password</label>
      {!! Form::password('confirmpassword',null,array('class'=>'form-control','required'=>'true','placeholder'=>'confirm password')) !!}
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