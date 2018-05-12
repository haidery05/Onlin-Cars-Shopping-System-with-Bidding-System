@extends('admin.layout.admin')
@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <style>
        body {
            background: #eee;
        }

        #first{
            background-color: white;
            height: 500px;
            width:600px;
            margin-left: 400px;
            margin-top: 100px;
            border-style: solid;
            border-width: 1px 1px 1px 1px;
        }
        #bids{
            color: #2a88bd;

        }

        .btn:hover {
            color: #fff;
            border: 0px outset rgba(0, 0, 0, 0.9);
            background: #2a88bd;
        }

        td{
            padding: 10px;
        }

        #firsttable{
            margin-left: 250px;

        }

        #name{
            background: #eee;
            width: 60px;
        }
        #price{
            background: #eee;
            width: 60px;
        }
    </style>

    <h3><strong>OFFERS</strong></h3>
    <br>
    <br>



    <table id="firsttable">
        @forelse($bids as $bid)
            <tr>
                <td id="name">Name:  </td>
                <td >{{$bid->created_by}}</td>
                <td id="price">Price:</td>
                <td>{{$bid->bid_amount}} </td>
                <td><a style="background-color:green;" href="{{url('accept_bid/'.$bid->bid_id)}}" type="button" class="btn btn-default btn-lg" active>Accept<span class=""></span>
                    </a></td>
            </tr>

        @empty
            <h3>No Offers</h3>

        @endforelse

    </table>





@endsection