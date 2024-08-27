<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function createCharge(Request $request)
    {
        $amount = $request->amount;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'One-time payment',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Payment successful!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Payment error: ' . $e->getMessage()
            ]);
        }
    }
}
