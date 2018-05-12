@extends('layouts.app')

@section('content')

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/registerpage.css">
    <script src="register.js"></script>

    <table id="tab">
        <tr>
            <td>
                <hgroup>
                    <h1>CarsOnline</h1>

                </hgroup>
                <form method="POST" action="{{ url('registerUser') }}">
                    {{ csrf_field() }}
                    <div class="group">
                        <input name="name" id="name" type="text"><span class="highlight"></span><span class="bar"></span>
                        <label>Name</label>
                    </div>
                    <div class="group">
                        <input name="email" id="email" type="text"><span class="highlight"></span><span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="group">
                        <input name="password" id="password" type="password"><span class="highlight"></span><span class="bar"></span>
                        <label>Password</label>
                    </div>
                    <div class="group">
                        <input name="password_confirmation" id="password-confirm" type="password"><span class="highlight"></span><span class="bar"></span>
                        <label>Confirm Password</label>
                    </div>

                    <input style="color: white; background-color:royalblue " type="submit" value="Register">
                </form>


            </td>
        </tr>
    </table>
@endsection
