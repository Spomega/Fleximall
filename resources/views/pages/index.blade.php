@extends('pages.template')


@section('main')

<div class="container">
  <div class="row">
    <div class="span12"> 
      
      <!-- Flex Slider -->
      <div class="flexslider">
        <ul class="slides">
          <li><a href="#"><img src="banner/slider.jpg" alt="Slider" /></a></li>
          <li><a href="#"><img src="banner/slider2.jpg" alt="Slider" /></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Products List -->
<div class="products-list">
  <div class="container">
    <h3><span>Featured</span> Products</h3>
    <ul class="thumbnails">
      
      <!-- Products Single Box -->
      <li class="span3">
        <div class="thumbnail"><a href="#" class="thumb"><img src="products/iphone.png" alt="Product" /></a>
          <p><a href="#">iPhone 5 16GB Black</a></p>
          <p class="price">GHC 574</p>
          <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
          <input type="button" value="Add to Cart" class="btn" />
          <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="new">New</span></div>
      </li>
      
      
    </ul>
  </div>
</div>

@stop