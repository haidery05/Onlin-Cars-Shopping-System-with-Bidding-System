@extends('admin.layout.admin')
@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/adminlayout.css">

    <form action="{{url('bid_update')}}"  method="get" class="form-horizontal" enctype="multipart/form-data"role="form">
        <!-- form-group // -->
        {{ csrf_field() }}

        <input type="hidden" value="{{$bid->post_idFk}}" name="post_idFk">
        <div class="form-group">
        <input class="form-control"  type="text" value="{{$bid->bid_amount}}" name="bid" id="bid">
        </div>
        <input type="submit" value="Update">
    </form>


@endsection