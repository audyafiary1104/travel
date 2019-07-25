@extends('agent.booking')
@section('content')
<section id="body" class="">

    <div class="row page-title">
        <div class="container clear-padding text-center">
          <h3>Hotel Booking Search</h3>

        </div>
      </div>
    <div class="section section-blog">
        <div class="container">
            <div class="row">
                <!-- blog -->
                                <div class="col-md-9 col-blog-posts" class="post-375 page type-page status-publish hentry">




<div id="hotel-booking-results">
	        <h3>Rooms results</h3>


<ul class="hb-search-results">

@foreach($rooms as $key => $rooms)

<li class="hb-room clearfix">

    <form name="hb-search-results"
          class="hb-search-room-results single-purchase">
		        <div class="hb-room-content">
            <div class="hb-room-thumbnail">
				                    <a class="hb-room-gallery"
                       data-lightbox="hb-room-gallery[384]"
                       data-title="hotel-slide"
                       href="http://shtheme.net/demosd/cruise/wp-content/uploads/2018/11/hotel-slide-1000x667.jpg">
						<img src="{{ asset('img/rooms_image/'.$product_image[$key]->image ) }}" width="270" height="270" alt=""/>                    </a>
				            </div>

            <div class="hb-room-info">
                <h4 class="hb-room-name">
                    <a href="http://shtheme.net/demosd/cruise/?hb_room=devlok-hotel-2">
						{{$rooms->type_room}}                </a>
                </h4>
                <ul class="hb-room-meta">
                    <li class="hb_search_capacity">
                        <label>Breakfest:</label>
                        <div class="">{{$rooms->breakfest}}</div>
                    </li>
                    <li class="hb_search_capacity">
                        <label>Smoking:</label>
                        <div>{{$rooms->smoking}}</div>
                    </li>
                    <li class="hb_search_max_child">
                        <label>Max Persons:</label>
                        <div>{{$rooms->persons}}</div>
                    </li>
                    <li class="hb_search_add_to_cart">
                        <label>Price:</label>
                        <div>{{$rooms->harga}}</div>
                    </li>
                    <li class="hb_search_add_to_cart">
                    <button class="main_btn" onclick="window.location.href='{{route('cart.agent',$rooms->id)}}'"  type="submit">Select  room</button>
                    </li>
                </ul>
            </div>
        </div>
                </form>


	</li>
@endforeach

</section>@stop