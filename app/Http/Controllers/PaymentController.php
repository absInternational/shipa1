<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Token;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function createCharge(Request $request)
    {
        $amount = $request->amount;
        $cardNumber = $request->card_number;
        $cardExpiryMonth = $request->cardexpirydate;
        $cardCvc = $request->csvno;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $token = Token::create([
                'card' => [
                    'number' => $cardNumber,
                    'exp_month' => explode('/', $cardExpiryMonth)[0],
                    'exp_year' => explode('/', $cardExpiryMonth)[1],
                    'cvc' => $cardCvc,
                ],
            ]);

            return response()->json([
                'token' => $token,
                'success' => true,
                'message' => 'Payment successful!'
            ]);

            $charge = Charge::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'source' => $token->id,
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
