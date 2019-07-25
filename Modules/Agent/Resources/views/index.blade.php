@extends('homepage.master')
@section('content')
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url({{asset('asset/images/img_bg_1.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>2 Days Tour</h2>
                                <h1>Amazing Maldives Tour</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('asset/images/img_bg_2.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>10 Days Cruises</h2>
                                <h1>From Greece to Spain</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('asset/images/img_bg_5.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Explore our most tavel agency</h2>
                                <h1>Our Travel Agency</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{asset('asset/images/img_bg_4.jpg')}});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                            <div class="slider-text-inner text-center">
                                <h2>Experience the</h2>
                                <h1>Best Trip Ever</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<div id="colorlib-reservation">
    <div class="container">
        <div class="row">
            <div class="search-wrap">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-resort"></i>
                                Hotels</a></li>

                    </ul>
                </div>
                <div class="tab-content">
                    <div id="flight" class="tab-pane fade in active">
                        <form method="post" action="{{route('list_hotels.agent')}}"class="colorlib-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Where:</label>
                                        <div class="form-field">
                                            <input type="text" id="search" name="search" class="form-control"
                                                placeholder="Search Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" name="check_in"class="form-control date"
                                                placeholder="Check-in date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" name="check_out" id="date" class="form-control date"
                                                placeholder="Check-out date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="guests">Guest</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">2</option>
                                                <option value="#">3</option>
                                                <option value="#">4</option>
                                                <option value="#">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="Find Hotels"
                                        class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-services">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 animate-box text-center aside-stretch">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-around"></i>
                    </span>
                    <h3>Amazing Travel</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-boat"></i>
                    </span>
                    <h3>Our Cruises</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-car"></i>
                    </span>
                    <h3>Book Your Trip</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
            <div class="col-md-3 animate-box text-center">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-postcard"></i>
                    </span>
                    <h3>Nice Support</h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                        ocean. A small river named Duden flows by their place and supplies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                <h2>Our Satisfied Guests says</h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="owl-carousel2">
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user"
                                style="background-image: url({{asset('asset/images/person1.jpg')}});"></span>
                            <span class="user">Alysha Myers</span>
                            <small>Miami Florida, USA</small>
                            <blockquote>
                                <p>" A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user"
                                style="background-image: url({{asset('asset/images/person2.jpg')}});"></span>
                            <span class="user">James Fisher</span>
                            <small>New York, USA</small>
                            <blockquote>
                                <p>One day however a small line of blind text by the name of Lorem Ipsum decided to
                                    leave for the far World of Grammar.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user"
                                style="background-image: url({{asset('asset/images/person3.jpg')}});"></span>
                            <span class="user">Jacob Webb</span>
                            <small>Athens, Greece</small>
                            <blockquote>
                                <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                    question ran over her cheek, then she continued her way.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#search").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "{{route('search.agent')}}",
                    data: {
                        term: request.term
                    },
                    dataType: "json",
                    success: function (data) {
                        var resp = $.map(data, function (obj) {
                            return obj.city;
                        });

                        response(resp);
                    }
                });
            },
            minLength: 1
        });
    });
</script>
@stop