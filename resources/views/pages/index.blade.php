@extends('pages.template')


@section('main')

<div class="container">
  <div class="row">
    <div class="span12"> 
      
      <!-- Flex Slider -->
      <div class="flexslider">
        <ul class="slides">
          <li><a href="#"><img src="banner/Buyhere.jpg" alt="Slider" /></a></li>
          <li><a href="#"><img src="banner/FlexiMallBe.jpg" alt="Slider" /></a></li>
          <li><a href="#"><img src="banner/KeepBuying.jpg" alt="Slider" /></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>



<!-- Products List -->
<div class="container">
  <div class="row">
    <div class="span12">
<!--      <h2 class="text-center margin-top margin-bottom">Our <span>Services</span></h2>
      
       Services List 
      <ul class="thumbnails about-list">
        
         Service Single 
        <li class="span3" style="opacity: 1;">
          <div class="thumbnail"><i class="icon-globe icon-service"></i>
            <div class="caption">
              <h3><a href="#">Web Developer</a></h3>
              <em>Subtitle here</em>
              <div class="clearfix"></div>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>euismod</strong>.</p>
            </div>
          </div>
        </li>
        
         Service Single 
        <li class="span3" style="opacity: 1;">
          <div class="thumbnail"><i class="icon-key icon-service"></i>
            <div class="caption">
              <h3><a href="#">Web Developer</a></h3>
              <em>Subtitle here</em>
              <div class="clearfix"></div>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>euismod</strong>.</p>
            </div>
          </div>
        </li>
        
         Service Single 
        <li class="span3">
          <div class="thumbnail"><i class="icon-leaf icon-service"></i>
            <div class="caption">
              <h3><a href="#">Web Developer</a></h3>
              <em>Subtitle here</em>
              <div class="clearfix"></div>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>euismod</strong>.</p>
            </div>
          </div>
        </li>
        
         Service Single 
        <li class="span3" style="opacity: 1;">
          <div class="thumbnail"><i class="icon-wrench icon-service"></i>
            <div class="caption">
              <h3><a href="#">Web Developer</a></h3>
              <em>Subtitle here</em>
              <div class="clearfix"></div>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>euismod</strong>.</p>
            </div>
          </div>
        </li>
      </ul>-->
      <hr>
      
      <!-- Portfolio Columns -->
      <div class="products-list products-list-simple">
        <h2 class="text-center margin-top margin-bottom">FLEXI <span>Malls</span></h2>
        <ul class="thumbnails">
          
          <!-- Products Single Box -->
           @foreach ($malls as $mall)
          <li class="span3" style="opacity: 1;">
              <div class="thumbnail"><a href="{{url('merchant/mallview/')}}/{{$mall->id}}">{!! HTML::image($mall->mallimage,"Mall Image",array('class'=>'folio')) !!}</a>
                <span class="new">{{$mall->mallname}}</span>
            </div>
          </li>
           @endforeach
     
          
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="products-list">
  <div class="container">
    <h3><span>Featured</span> Products</h3>
    <ul class="thumbnails">
      
      <!-- Products Single Box -->
        @foreach ($items as $item)
      <li class="span3">
        <div class="thumbnail"><a href="#" class="thumb">  {!! HTML::image($item->thumbnailimage,"Thumbnail Image") !!}</a>
          <p><a href="#">{{$item->itemname}}</a></p>
          <p class="price">GHC {{$item->price}}</p>
          <p class="rating"><i class="icon-star"><span>1</span></i><i class="icon-star"><span>2</span></i><i class="icon-star"><span>3</span></i><i class="icon-star-half-empty"><span>4</span></i><i class="icon-star-empty"><span>5</span></i></p>
          <input type="button" value="Add to Cart" class="btn" />
          <a href="#" class="add-list"><i class="icon-star"></i>Wish List</a><a href="#" class="add-comp"><i class="icon-tasks"></i>Compare</a><span class="new">New</span></div>
      </li>
        @endforeach
      
    </ul>
  </div>
</div>

@stop