@extends('admin.layout.admin')
@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/adminlayout.css">

    <h3><strong>PRODUCTS</strong></h3>
    <br>
    <br>


    <table id="firsttable">
        @forelse($posts as $post)
        <tr>
            <td id="name">Name: </td>
            <td>{{$post->name}}</td>
            <td id="price">Price:</td>
            <td> {{$post->price}}</td>
            <td><a style="background-color:dodgerblue;" href="{{url('update_post_page/'.$post->post_id)}}" type="button" class="btn btn-default btn-lg" active>Edit<span class=""></span>
                </a></td>
            <td><a style="background-color:dodgerblue;" href="{{url('offers/'.$post->post_id)}}" type="button" class="btn btn-default btn-lg" active>Bids<span class=""></span>
                </a></td>
        </tr>


        @empty
            <h3>No Products</h3>

        @endforelse

    </table>




@endsection