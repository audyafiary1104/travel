@extends('homepage.master')
@section('content')
<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{asset('asset/images/cover-img-4.jpg')}});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>by colorlib.com</h2>
				   					<h1>Find Hotel</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
							@foreach($product_info as $key => $product)

								<div class="col-md-6 col-sm-6 animate-box">
									<div class="hotel-entry">
										<a href="{{route('details.agent',$product->id)}}" class="hotel-img" style="background-image: url('{{ asset('img/hotels_image/'.$product_image[$key]->image ) }}');">
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">{{$product->nama_hotels}}</a></h3>
											<span class="place">{{$product->city}},{{$product->country}}</span>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div>
								</div>
						@endforeach
							
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
				
				</div>
			</div>
		</div>
@stop