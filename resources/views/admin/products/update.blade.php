@extends('admin.layout.admin')
@section('content')

    <form action="{{ url('update_post') }}" method="POST" class="form-horizontal" enctype="multipart/form-data"role="form">
        <!-- form-group // -->
        {{ csrf_field() }}
        <input type="hidden" value="{{$post->post_id}}" name="post_id">

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Car Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="carname" id="name" value="{{$post->name}}">
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
                    <option @if($post->km_used == "10000-20000") {{"selected"}} @endif value="10000-20000">10000-20000</option>
                    <option @if($post->km_used == "20000-30000") {{"selected"}} @endif value="20000-30000">20000-30000</option>
                    <option @if($post->km_used == "30000-40000") {{"selected"}} @endif value="30000-40000">30000-40000</option>
                    <option @if($post->km_used == "40000-50000") {{"selected"}} @endif value="40000-50000">40000-50000</option>
                    <option @if($post->km_used == "50000-60000") {{"selected"}} @endif value="50000-60000">50000-60000</option>
                    <option @if($post->km_used == "60000-70000") {{"selected"}} @endif value="60000-70000">60000-70000</option>
                    <option @if($post->km_used == "70000-80000") {{"selected"}} @endif value="70000-80000">70000-80000</option>
                    <option @if($post->km_used == "80000-90000") {{"selected"}} @endif value="80000-90000">80000-90000</option>
                    <option @if($post->km_used == "90000-100000") {{"selected"}} @endif value="90000-100000">90000-100000</option>
                    <option @if($post->km_used == "100000-110000") {{"selected"}} @endif value="100000-110000">100000-110000</option>
                    <option @if($post->km_used == "110000-120000") {{"selected"}} @endif value="110000-120000">110000-120000</option>
                    <option @if($post->km_used == "120000-130000") {{"selected"}} @endif value="120000-130000">120000-130000</option>
                    <option @if($post->km_used == "130000-140000") {{"selected"}} @endif value="130000-140000">130000-140000</option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="about" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
                <textarea class="form-control" placeholder="Description" name="description">{{$post->description}}</textarea>
            </div>
        </div> <!-- form-group // -->
        <div class="form-group">
            <label for="qty" class="col-sm-3 control-label">Price&Contact</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="price" value="{{$post->price}}" id="qty" placeholder="Price">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="contact" id="date_finish" value="{{$post->contact_no}}" placeholder="Phone#">
            </div>

        </div> <!-- form-group // -->
        <div class="form-group">
            <label class="col-sm-3 control-label">Extras</label>
            <div class="col-sm-3">
                <label class="control-label small" for="date_start">Exterior Color </label>
                <input type="text" class="form-control" name="color" id="date_start" value="{{$post->color}}" placeholder="Exterior Color">
            </div>
            <div class="col-sm-3">
                <label class="control-label small" for="date_finish">MileAge</label>
                <input type="text" class="form-control" name="mileage" id="date_finish" placeholder="MileAge" value="{{$post->mileage}}">
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
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </div> <!-- form-group // -->
    </form>
    <!-- container// -->




@endsection