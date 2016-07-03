@extends('pages.template')


@section('main')


<div class="products-list">
  <div class="container">
    <h3><span>Products</span> In Stock </h3>
    <ul class="thumbnails">
      
      <!-- Products Single Box -->
      @foreach ($items as $item)
      <li class="span3">
        <div class="thumbnail"><a href="#" class="thumb"> {!! HTML::image($item->thumbnailimage,"Thumbnail Image") !!}</a>
          <p><a href="#">{{$item->itemname}}</a></p>
          <p class="price">GHC {{$item->price}}</p>
          <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
          <input type="button" value="Add to Cart" class="btn" />
          <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a></div>
      </li>
        @endforeach
      
    </ul>
  </div>
</div>






@stop