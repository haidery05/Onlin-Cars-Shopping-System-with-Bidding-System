@extends('layouts.app')

@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/loginpage.css">
    <script src="login.js"></script>

    <table id="tab">
        <tr>
            <td>
                <hgroup>
                    <h1>CarsOnline</h1>

                </hgroup>
                <form action="{{ url('authenticateUsers') }}" method="post">
                    {{ csrf_field() }}
                    <div class="group">
                        <input id="email" name="email"  type="text"><span class="highlight"></span><span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="group">
                        <input id="password" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
                        <label>Password</label>
                    </div>
                    <input style="color: white; background-color:royalblue " type="submit" value="Login">
                    <h6>Not Registered?</h6>
                    <a href="{{url('register')}}"><button type="button" class="button buttonBlue">Register
                            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                        </button></a>
                </form>


            </td>
        </tr>
    </table>
@endsection
