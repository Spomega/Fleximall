@extends('pages.template')



@section('main')
<div class="row"> 
    
    <!-- Delivery Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">Delivery</li>
      </ul>
      <h1 class="margin-bottom">Delivery <span>Company</span></h1>
    </div>

  </div>
 <div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'delivery/store','method'=>'post') ) !!}
        <div class="control-group">
          <label class="control-label">Details</label>
          <div class="controls">
      {!! Form::text('companyname',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Company Name')) !!}
      {!! Form::text('email',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Email')) !!}
      {!! Form::text('contactnumber',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Contact Number')) !!}
      {!! Form::textarea('address',null,array('class'=>'form-control','required'=>'true','rows'=>'3','placeholder'=>'Address')) !!}
      {!! Form::text('registrationcode',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Registration Code')) !!}
      {!! Form::text('insurancecompany',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Insurance Service Provider'))!!}
      {!! Form::text('policy',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Policy Number'))!!} 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Vehicle Type</label>
          <div class="controls">
             <div class="col-xs-8">
               @foreach (App\Http\Models\Vehicle::all() as $vehicle)
              <label><input type="checkbox" value="check1">Van</label>
              <label><input type="checkbox" value="check2" checked="">Motto</label>
              <label><input type="checkbox" value="check2" checked="">Salon Car</label>
              @endforeach
          </div>
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