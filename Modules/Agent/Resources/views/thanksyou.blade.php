<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <h3>Dear, {{$balance->agent_code}}</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thank you for Booking No.We have sent Vocher you an email "{{$balance->email}}" with your details
Please go to your above email now and login.</p>
<div id="pesan"></div>
    <br><br>
        </div>
        
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            var url = "http://harviacode.com"; // url tujuan
            var count = 5; // dalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    $('#pesan').html('Anda akan di redirect ke dashboard dalam ' + waktu + ' detik.');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = "{{route('agent.dashboard')}}";
                }
            }
            countDown();
        </script>
