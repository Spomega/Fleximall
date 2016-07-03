@extends('pages.template')


@section('main')

<!-- Products List -->
<div class="container">
  <div class="row">
    <div class="span12">
<!--      <hr>-->
      
      <!-- Portfolio Columns -->
      <div class="products-list products-list-simple">
        <h2 class="text-center margin-top margin-bottom">FLEXI <span>Shops</span></h2>
        <ul class="thumbnails">
          
          <!-- Products Single Box -->
           @foreach ($shops as $shop)
          <li class="span3" style="opacity: 1;">
              <div class="thumbnail"><a href="{{url('item/viewitem/')}}/{{$shop->id}}">{!! HTML::image($shop->bannerimage,"Shop Image",array('class'=>'folio')) !!}</a>
                <span class="new">{{$shop->shopname}}</span>
            </div>
          </li>
           @endforeach
     
          
        </ul>
      </div>
    </div>
  </div>
</div>


@stop