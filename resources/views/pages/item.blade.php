@extends('pages.template')


@section('main')
<div class="row"> 
    
    <!-- Delivery Page-->
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Pages</a> <span class="divider">/</span></li>
        <li class="active">Products</li>
      </ul>
      <h1 class="margin-bottom">Add <span>Product</span></h1>
    </div>

  </div>
 <div class="row"> 
     <div class="span5"></div>
      <div class="span3">
<!--      <h4 class="margin-bottom"></h4>-->
     
      {!!Form::open (array('url'=>'item/store','method'=>'post','files'=>'true') ) !!}
        <div class="control-group">
          <label class="control-label">Details</label>
          <div class="controls">
      {!! Form::text('itemname',null,array('class'=>'form-control','required'=>'true','placeholder'=>'product name')) !!}
      {!! Form::text('price',null,array('class'=>'form-control','required'=>'true','placeholder'=>'price')) !!}
      {!! Form::text('quantity',null,array('class'=>'form-control','required'=>'true','placeholder'=>'quantity')) !!}
      {!! Form::textarea('description',null,array('class'=>'form-control','required'=>'true','placeholder'=>'description')) !!}
          </div>
        </div>
        <div class="control-group">
            <label class="control-label">Category</label>
            <div class="controls">
                <div class="col-xs-8">
                    <select class="form-control" name="category">
                        <option value="1">General Goods</option>
                        <option value="2">Electricals</option>
                    </select>
                    <label></label>

                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Product Image</label>
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


