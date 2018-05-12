@extends('admin.layout.admin')
@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/adminlayout.css">

    <h3><strong>BIDS</strong></h3>
    <br>
    <br>



    <table id="firsttable">
        @forelse($bids as $bid)
            <tr>
                <td id="name">Name: </td>
                <td >{{$bid->carname}}</td>
                <td id="price">Price:</td>
                <td> {{$bid->bid_amount}}</td>
                <td><a style="background-color:dodgerblue;" href="{{url('edit_bid/'.$bid->post_idFk)}}" type="button" class="btn btn-default btn-lg" active>Edit<span class=""></span>
                    </a></td>
                <td> @if($bid->bid_status==1)
                        <label>
                            Bid Has Been Accepted
                        </label>
                        <a style="background-color:dodgerblue;" href="{{url('payment_page')}}" type="button" class="btn btn-default btn-lg" active>Pay Now<span class=""></span>
                        </a>
                    @endif</td>
            </tr>

        @empty
            <h3>No Bids</h3>

        @endforelse

    </table>



@endsection