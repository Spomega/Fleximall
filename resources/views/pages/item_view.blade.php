@extends('pages.template')

@section('main')

<div class="container">
  <div class="row">
    <div class="span12"> 
      
      <!-- Breadcrumb -->
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">View</li>
      </ul>
      <h1>Products</h1>
      <p class="small-desc">Lorem ipsum dolor sit amet, consectetuer <strong>adipiscing</strong> elit.<br>
        Sed diam nonummy nibh euismod tincidunt ut <a href="#">laoreet dolore</a> magna aliquam erat volutpat.</p>
      
     
      
      <!-- Cart -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th class="p-name">Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
<!--            <th>Description</th>-->
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
          <tr>
            <td class="thumb-cart"><a href="#"> {!! HTML::image($item->thumbnailimage,"Thumbnail Image") !!}</a></td>
            <td class="p-name"><h5><a href="#">{{$item->itemname}}</a></h5></td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->price}}</td>
<!--            <td>{{$item->description}}</td>-->
            <td><div class="main-checkout"><a href="#" class="btn">Delete</a> <a href="#" class="btn btn-checkout">Update</a></div></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
     
<!--      <div class="main-checkout"><a href="#" class="btn">View Cart</a> <a href="#" class="btn btn-checkout">Checkout</a></div>-->
    </div>
  </div>
</div>


@stop




