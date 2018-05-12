<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" type="text/css" href="css/Index.css">

	<title>Cars Online</title>

</head>
<body>

<nav class="navbar navbar-default navbar-inner navbar-fixed-top" id="topnav"  role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"  style="color: #2a88bd"><h1 id="headcar"><h1><b>CarsOnline</b></h1></a>
    </div>
    <ul class="nav navbar-nav">
        @if(Auth::User())
      <li><a href="{{ url('dashboard') }}" class="btn btn-danger" id="dashb"  style="color: white">Dashboard</a></li>
        @else
            <li></li>
        @endif
      @if(Auth::User())
        <li><a href="{{ url('logout') }}" id="logout" style="color: white">Logout</a></li>
      @else
        <li><a href="{{ url('login') }}" id="login" style="color: white">Login</a></li>
      @endif

    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
      <img class="imgset img-responsive" id="family" >

    {{--<h1 class="head1"><strong>Buy And Sell Cars At The Best Platform Ever</strong></h1><br>--}}
    {{--<h1 class="head2"><strong>Here Are Your Choices</strong></h1>--}}
    <div  class="content">
      {{--<a href="--}}{{-- {{ url('add_post') }} --}}{{--"><button type="button" class="btn btn-lg btn-primary">Shop New</button></a>--}}
      <a href="{{ url('list_posts') }}"><button type="button" class="btn btn-lg btn-warning" id="shopb">Shop Now</button></a>
    </div>
  </div>
</div>

<div id="featured">
<div class="box_wrapper" >
  <h3>Featured Products</h3>
</div>



<div class="w3-container c2 text-center" >
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-left: 90px;">
      <a href=""><img src="images/civic.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Honda Civic</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-right: 20px; margin-left: 20px;">
      <a href="#"><img src="images/city.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Honda City</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%">
      <a href=""><img src="images/wagonr.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Waqon R</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-right: 20px; margin-left: 20px;">
      <a href=""><img src="images/move.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Move</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
</div>

<div class="w3-container c2 text-center">
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-left: 90px;">
      <a href=""><img src="images/cultus.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Suzuki Cultus</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-right: 20px; margin-left: 20px;">
      <a href="#"><img src="images/swift.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Suzuki Swift</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%">
      <a href=""><img src="images/corola.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Toyota Corola</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
  <div class="w3-card-2 w3-quarter" style="width:20%; margin-right: 20px; margin-left: 20px;">
      <a href=""><img src="images/landcruiser.jpg" alt="Person" style="width:100%"></a>
      <div class="w3-container" style="margin-top: 20px;">
        <h4><b>Land Cruiser</b></h4>
        <p>The boss of all bosses</p><br>
        <button class="w3-button w3-red" style="float: left;">Details</button>
      </div>
  </div>
</div>

</div>

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3> Contact </h3>
                    <ul>
                        <li> <a href="#"> Kalb-E-Haider  </a> </li>
                        <li> <a href="#"> Muhammad Rafey </a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3> Important Links </h3>
                    <ul>
                        <li> <a href="#"> Used Cars </a> </li>
                        <li> <a href="#"> New Cars </a> </li>
                        <li> <a href="#"> Post Ad </a> </li>
                        <li> <a href="#"> Signup </a> </li>
                        <li> <a href="login.php"> Login </a> </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3> Location </h3>
                    <ul>
                        <li> <a href="#"> Lahore </a> </li>
                        <li> <a href="#"> Islamabad </a> </li>
                        <li> <a href="#"> Karachi </a> </li>
                        <li> <a href="#"> Multan </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © 2018, www.carsonline.com</p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>


</body>
</html>
