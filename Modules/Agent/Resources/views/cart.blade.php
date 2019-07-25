<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
    <section id="booking">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 text-center">
                    <p>Check In</p>
                    <strong>{{date('d-M-Y', $check_in)}}</strong>
                </div>
                <div class="col-12 col-sm-4 text-center">
                    <p>Check Out</p>
                    <strong>{{date('d-M-Y', $check_out)}}</strong>
                </div>
                <div class="col-12 col-sm-4 text-center">
                    <p>Total Pernight</p>
                    <strong>{{$night}} Night</strong>
                </div>
            </div>
        </div>
    </section>
    <section id="chitiet">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3><strong>{{$cart->type_room}}</strong></h3>
                    <h4>2 Adults</h4>
                </div>
                <div class="col-12 col-sm-8 chitiet-left">
                    <h3 class="text-blue">guest</h3>
                    <form class="guest" action="{{route('checkout.agent_post')}}" method="POST" >
                    @csrf
                        <div class="form-row">
                           
                            <div class="col-sm-6  col-12 mr-top-1em-media">
                                    <select name="title"class="custom-select mr-sm-2" id="inlineFormCustomSelect" required>
                                        <option selected>Title</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mrs">Mrs</option>

                                    </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 col-12">
                                <input type="text" class="form-control mr-2" name="first_name" placeholder="First name" required>
                            </div>
                            <div class="col-sm-6 col-12 mr-top-1em-media">
                                <input type="text" class="form-control mr-2" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                          
                        </div>
                        <input type="hidden" name="total_price" value="{{$sub}}">
                        <input type="hidden" name="price" value="{{$grand}}">
                        <input type="hidden" name="id_type_room" value="{{$cart->id}}">
                        <input type="hidden" name="check_in" value="{{date('d-M-Y', $check_in)}}">
                        <input type="hidden" name="check_out" value="{{date('d-M-Y', $check_out)}}">


                </div>

            
            </div>
        </div>
    </section>
    <section id="summary">
        <div class="container">
            <h3><strong>Summary</strong></h3>
            <h5><strong>Standard Room Single Beds</strong></h5>
            <h5>Price Pernight: {{$cart->harga}} </h5>
            @if($cart->breakfest == "yes")
            <h5>Room And Breakfest</h5>
            @else
            <h5>Room Only</h5>
        @endif
            <br/>
            <table>
                <tr>
                    <th><h5>Subtotal:</h5></th>
                    <td><h5>${{$grand}}</h5></td>
                </tr>
                <tr>
                    <th><h5>Taxes & Fees:</h5></th>
                    <td><h5>$8.0</h5></td>
                </tr>
            </table>
            <div class="total">
                <div class="total-item">Your Balance:<span class="top">${{$data->balance}}</span></div>
                <div class="total-item">Total Amount:<span class="bottom">${{$sub}}</span></div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <section id="disclaimer">
        <div class="container">
            <h3>Disclaimer</h3>
            <p><strong>GST Disclaimer</strong></p>
            <p>Travelwards is to be used by a travel agency, for an end customers travel (or part of a travel booking) which is outside of the customer and agency's home country. Where GST is applicable for the end customer, the travel agency takes full responsibility and liability, to charge the necessary GST amounts</p>
            <p><strong>Payments Disclaimer</strong></p>
            <p id="more">
                The agency or business using Travelwards, takes full responsibility and liability for all credit card transactions. As such, they must collect identification including a full name, address, telephone number and drivers license or passport ...
                <button id="btn-more">more</button>
            </p>
            <p id="less">
                The agency or business using Travelwards, takes full responsibility and liability for all credit card transactions. As such, they must collect identification including a full name, address, telephone number and drivers license or passport. The agency or business using Travelwards, takes full responsibility and liability for all credit card transactions. As such, they must collect identification including a full name, address, telephone number and drivers license or passport. The agency or business using Travelwards, takes full responsibility and liability for all credit card transactions. As such, they must collect identification including a full name, address, telephone number and drivers license or passport.
                <button id="btn-less">less</button>
            </p>
        </div>
    </section>
    <section id="cancellation">
       <div class="container">
            <div class="row">
                <div class="cancellation-left col-12 col-sm-9">
                    <h3>Cancellation policy</h3>
                    <p class="text-blue">please review cancellation policy carefully</p>
                    <p>Your booking is fully refundable until Mar 16, 2018, 00:00 (UTC) </p>
                    <p>From Mar 16, 2018, 00:00 (UTC) the booking is Non-Refundable</p>
                </div>
                
                <div class="cancellation-right col-12 col-sm-3">
                    <button>book room</button>
                </div>
            </div>
            </form>

            <div class="form-check col-12 col-sm-12">

            </div>
       </div>
       
    </section>

        </div>
    </footer>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{asset('asset/js/scroll.js')}}"></script>
    <script src="{{asset('asset/js/show-button.js')}}"></script>

</body>
</html>