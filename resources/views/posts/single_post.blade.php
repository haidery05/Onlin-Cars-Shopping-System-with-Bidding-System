<html>
<head>
    <title>Products Details_</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <style>
        body{
            background-image: url("images/bmw.jpg");
            background-attachment:fixed;
            backgroung-repeat:no-repeat;background-size:cover;
        }

        #tab{
            color:black;
            background-color:white;
            margin-left:300px;
            /*margin-top:200px;*/
            opacity:0.9;

            width:500px;
        }
        #img1{
            height:300px;
            width:600px;
        }
        td{
            padding:10px;
        }

        /*tr{*/
            /*padding: -200px;*/
        /*}*/




        .nav{
            float: right;
            color: red;
        }

        .navbar-default {
            background-color: black;
        }

        #headcar{
            margin:-20px;
            padding-left:30px;
            padding-top:25px;
            font-weight:600px;
        }

        .navbar-inner {
            background:white;
            border: 0px;
        }

        .imgset{

            position:relative;
            align-content:center;
            background-position: center;
            opacity: 1;
        }

        .bg{

            background-color:black;
            display: inline-block;
            min-height: 600px;
        }


        .content{

            position:absolute;
            text-align:center;
            top:400px;
            left:600px;
        }

        .btn{

            margin-right:100px;
            border-radius: 0px;
        }

        #dashb{
            background-color: #2a88bd;
            border: 0px outset #2a88bd;
            margin-left:961px;
        }
        #dashb:hover{
            color: #fff;
            border: 0px outset rgba(0, 0, 0, 0.9);
            background: rgba(0,0,0, 0.9);
        }

        #logout{
            background-color: #2a88bd;
            border: 0px outset #2a88bd;
        }
        #logout:hover{
            color: #fff;
            border: 0px outset rgba(0, 0, 0, 0.9);
            background: rgba(0,0,0, 0.9);
        }

        #login{
            background-color: #2a88bd;
            border: 0px outset #2a88bd;
        }
        #login:hover{
            color: #fff;
            border: 0px outset rgba(0, 0, 0, 0.9);
            background: rgba(0,0,0, 0.9);
        }

        .btn-lg{
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 30px;
        }

        #theading{
            padding-left:200px;
        }

        #bidb{
            padding-left:160px;
            height:50px;
        }


    </style>



</head>

<body style="background-color:whitesmoke;">

<nav class="navbar navbar-default navbar-inner navbar-fixed-top" id="topnav"  role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <h1 style="color: #2a88bd" id="headcar"><b>CarsOnline</b></h1></a>

            <ul  class="nav navbar-nav">
                <li><a href="{{ url('dashboard') }}" class="btn btn-danger" id="dashb"  style="color: white">Dashboard</a></li>

                <li><a href="{{ url('logout') }}" id="logout" style="color: white">Logout</a></li>



        </div>
    </div>
    </ul>

</nav>

<div >


    <table id="tab" >
        <tr>
            <th id="theading"><h1>{{$post->name}}</h1></th>
        </tr>

        <tr>
            <td><img class="imgset" src="{{ url('images/'.$post->image) }}" alt="image" width="600px" height="300px" /></td>
        </tr>


        <tr>
            <td>Car Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->name}} </td>
            <td></td>
        </tr>

        <tr>
            <td>Model Year: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->model_year}} </td>
            <td></td>
        </tr>

        <tr>
            <td>KM Used so far: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->km_used}} </td>
            <td></td>
        </tr>

        <tr>
            <td>Description : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->description}}</td>
            <td></td>
        </tr>

        <tr>
            <td>Price: Rs:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->price}}</td>
            <td></td>
        </tr>

        <tr>
            <td>Contact: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->contact_no}} </td>
            <td></td>
        </tr>

        <tr>
            <td>Exterior Color :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->color}}</td>
            <td></td>
        </tr>

        <tr>
            <td>Mileage :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$post->mileage}}</td>
            <td></td>
        </tr>

        <tr>
            <td id="bidb">
                <div class="card-read-more">

                    <button onclick="document.getElementById('id{{ $post->post_id }}').style.display='block'" class="w3-block w3-blue">Bid Now</button>

                    <div id="id{{ $post->post_id }}" class="w3-modal w3-animate-opacity">
                        <form method="post" action="{{ url('submit_bid') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="post_id" value="{{$post->post_id}}">
                            <div class="w3-modal-content w3-card-4" style="max-width: 400px; margin-top: ">
                                <header class="w3-container w3-indigo">
                                    <span onclick="document.getElementById('id{{ $post->post_id }}').style.display='none'"
                                          class="w3-button w3-tiny w3-red w3-display-topright">&times;</span>
                                    <h2>WHAT IS YOUR OFFER</h2>
                                </header>
                                <div class="w3-container">
                                    <br>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">BID:</label>
                                        <input type="text" class="form-control" name="bid" id="name" placeholder="Place Your Bid">
                                    </div>
                                    <br>
                                </div>
                                <footer class="w3-container w3-indigo">
                                    <div class="form-group">
                                        <div style="margin-top: 20px;">
                                            <input type="hidden" value="{{$post->name}}" name="carname">
                                            <input type="submit" class="w3-block w3-blue" value="Submit">
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </form>
                    </div>
                </div>
                </div>

            </td>
        </tr>


    </table>

</div>
</body>

</html>