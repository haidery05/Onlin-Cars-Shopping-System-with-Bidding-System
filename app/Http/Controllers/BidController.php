<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Bid;
use Auth;
use App\Post;
use Stripe\Stripe;


class BidController extends Controller
{
    public function submit_bid(Request $request){
        $bid = new Bid();
        $bid->user_idFk            = Auth::User()->id;
        $bid->post_idFk            = $request->post_id;
        $bid->carname           = $request->carname;
        $bid->bid_amount           = $request->bid;
        $bid->bid_status           = 1;
        $bid->created_by         =   Auth::User()->name;

        $bid->save();
        return redirect('list_posts')->with('success','Bid Placed Successfully');
    }

    public function list_bids()
    {
        $bids = Bid::where('user_idFk', Auth::User()->id)->get();
    	return view('admin.bids.bids', compact('bids'));
    }

    public function edit_bid($bid_id)
    {
    	$bid = Bid::findOrFail($bid_id);
//    	dd($bid)
    	return view('admin.bids.update', compact('bid'));
    }

    public function bid_update(Request $request)
    {
    	$bid = Bid::findOrFail($request->post_idFk);
    	$bid->bid_amount = $request->bid;

    	$bid->save();

    	return redirect('dashboard')->with('message','Bid Has Been Updated');
    }

//    public function bid_status(Request $request)
//    {
//    	$bid = Bid::findOrFail($request->bid_id);
//    	$bid->status = 1;
//    }

    public function offers($id)
    {

        $bids = Bid::where('post_idFk',$id)->get();
        return view('admin.bids.offers', compact('bids'));
    }

    public function accept_bid($id)
    {

//        $bids=Bid::findOrFail($id);
//        dd($bids);
        $bids = Bid::where('bid_id',$id)->first();
//        dd($bids);
        $bids->bid_status='1';

        $bids->save();
//        dd($bids);

        return redirect('posted_products')->with('message','Bid Has Been Accepted');

    }

}
