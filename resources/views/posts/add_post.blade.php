<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/Adpost.css">

	<title>Cars Online|Post Ad</title>
</head>
<body>

<div class="container set">

  <section class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Cars Online|Post Ad</h3>
</div>
<div class="panel-body">

<form action="{{ url('submit_post') }}" method="POST" class="form-horizontal" enctype="multipart/form-data"role="form">
 <!-- form-group // -->
{{ csrf_field() }}


   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Car Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="carname" id="name" placeholder="Name Of The Car">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Model Year</label>
    <div class="col-sm-9">
      <select class="form-control" id="selectElementId" name="modelyear">
      </select>
      <script>
        var min = 1990,
        max = 2021,
        select = document.getElementById('selectElementId');

        for (var i = min; i<=max; i++){
           var opt = document.createElement('option');
           opt.value = i;
           opt.innerHTML = i;
           select.appendChild(opt);
          }
      </script>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Km Used So Far</label>
    <div class="col-sm-3">
   <select class="form-control" name="kmusedsofar">
      <option>10000-20000</option>
      <option>20000-30000</option>
      <option>30000-40000</option>
      <option>40000-50000</option>
      <option>50000-60000</option>
      <option>60000-70000</option>
      <option>70000-80000</option>
      <option>80000-90000</option>
      <option>90000-100000</option>
      <option>100000-110000</option>
      <option>110000-120000</option>
      <option>120000-130000</option>
      <option>130000-140000</option>

   </select>
    </div>
  </div>

  <div class="form-group">
    <label for="about" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea class="form-control" placeholder="Description" name="description"></textarea>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="qty" class="col-sm-3 control-label">Price&Contact</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" name="price" id="qty" placeholder="Price">
    </div>
    <div class="col-sm-3">
    <input type="text" class="form-control" name="contact" id="date_finish" placeholder="Phone#">
    </div>

  </div> <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Extras</label>
    <div class="col-sm-3">
	  <label class="control-label small" for="date_start">Exterior Color </label>
	  <input type="text" class="form-control" name="color" id="date_start" placeholder="Exterior Color">
    </div>
	<div class="col-sm-3">
	  <label class="control-label small" for="date_finish">MileAge</label>
	  <input type="text" class="form-control" name="mileage" id="date_finish" placeholder="MileAge">
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Upload Images</label>
    <div class="col-sm-3">
       <input  type="file" name="image">
    </div>
  </div> <!-- form-group // --> <!-- form-group // -->
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </div> <!-- form-group // -->
</form>

</div><!-- panel-body // -->
</section><!-- panel// -->


</div> <!-- container// -->

</body>
</html>
