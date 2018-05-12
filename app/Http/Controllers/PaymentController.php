<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use App\Http\Controllers\BidController;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {


//         Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_iGfg6G7ZDkNI0k2RlRoNOHAk");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $request->stripeToken;
        $bid = Bid::all('bid_amount');


// Charge the user's card:
        $charge = \Stripe\Charge::create(array(
            "amount" => 1500000,
            "currency" => "usd",
            "description" => "Example charge",
            "source" => $token,
        ));

        return redirect('dashboard')->with('message','Payment Successfully');
    }

    public function payment_page()
    {
        return view('admin.bids.payment');
    }
}
