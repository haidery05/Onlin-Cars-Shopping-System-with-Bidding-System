<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" type="text/css" href="css/productdisplay.css">

	<title></title>
</head>
<body>



<div class="container">
    <div class="row">
        <div>
            <h1 class="text-center" style="color: black">Cars Online</h1>
        </div>
    	<div class="box_wrapper">
  			<h4>Cars For Sale</h4>
		</div>
        @foreach($posts as $post)
        <div class="col-xs-12 col-sm-4">
            <div class="card">
                <a class="img-card" href="{{ url('single_post/'.$post->post_id) }}">
                     <img src="{{ url('images/'.$post->image) }}" alt="image"  />
                </a>
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a href="">
                            {{$post->carname}}

                        </a>
                    </h4>
                    <div class="">
                        <p style="color:dimgrey"><strong>Model Year:{{$post->model_year}} </strong> <span style="float: right;"><strong>Rs:{{$post->price}} <strong></span></p>
                        <p></p>
                    </div>
                </div>
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
        </div>
        @endforeach


    </div>
</div>
</body>
</html>
