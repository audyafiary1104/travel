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
				   					<h1>Hotel Overview</h1>
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
							<div class="col-md-12">
								<div class="wrap-division">
                                
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2>Select Rooms</h2>
									</div>
									<div class="row">
                                    @foreach($rooms as $key => $rooms)
    										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url({{ asset('img/rooms_image/'.$image[$key]->image ) }});"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>{{$rooms->type_room}}</h2>
															<p class="price"><span>{{$rooms->harga}}</span> <small>/ night</small></p>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="{{route('cart.agent',$rooms->id)}}" class="btn btn-primary">Book Now!</a></p>
														</div>
													</div>
												</div>
											</div>
										</div>
@endforeach
										
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					
				</div>
			</div>
		</div>


@stop