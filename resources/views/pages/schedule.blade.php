@extends('pages.template')



@section('main')
<div class="row"> 
     <!-- Schedule Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">Delivery</li>
        <li class="active">Schedule</li>
      </ul>
      <h1 class="margin-bottom">Delivery <span>Schedule</span></h1>
    </div>
     
     <div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'schedule/store','method'=>'post') ) !!}
        <div class="control-group">
          <label class="control-label">Schedule Details</label>
          <div class="controls">
      {!! Form::select('day',['Select One','Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday'],null,['class'=>'form-control']) !!}
      {!! Form::text('starttime',null,array('class'=>'form-control','required'=>'true','placeholder'=>'Start Time eg.8:00am')) !!}
      {!! Form::text('endtime',null,array('class'=>'form-control','required'=>'true','placeholder'=>'End Time eg.10:00pm')) !!}
          </div>
        </div>
        <div class="control-group no-margin">
          <div class="controls">
              <button type="submit" class="btn ">Create Schedule</button>
          </div>
        </div>
      {!!Form::close()!!}
    </div>
 </div>    

    
</div>

@stop