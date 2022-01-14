<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Stripe;
use Session;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {


        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // Stripe\Charge::create([
        //     "amount" => 100 * 100,
        //     "currency" => "usd",
        //     "source" => $request->stripeToken,
        //     "description" => "Saano Sahayog Donation."
        // ]);

        Session::flash('success', 'Payment successful!');
Session::save();
        // dd(Session::get('message'));
        return redirect()->back();
    }
}
