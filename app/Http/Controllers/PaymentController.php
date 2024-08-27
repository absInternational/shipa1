<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        Log::info('Request data:', $request->all());

        $amount = $request->amount;
        $cardNumber = $request->card_number;
        $cardExpiryMonth = $request->cardexpirydate;
        $cardCvc = $request->csvno;

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {


            return response()->json([
                'success' => true,
                'stripe' => $stripe,
                'amount' => $amount,
                'cardNumber' => $cardNumber,
                'cardExpiryMonth' => $cardExpiryMonth,
                'cardCvc' => $cardCvc,
                'message' => 'Payment successful!'
            ]);
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount * 100,
                'currency' => 'usd',
                'payment_method_data' => [
                    'type' => 'card',
                    'card' => [
                        'number' => $cardNumber,
                        'exp_month' => explode('/', $cardExpiryMonth)[0],
                        'exp_year' => explode('/', $cardExpiryMonth)[1],
                        'cvc' => $cardCvc,
                    ],
                ],
                'confirm' => true,
                'description' => 'One-time payment',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Payment successful!'
            ]);
        } catch (\Exception $e) {
            Log::error('Payment error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Payment error: ' . $e->getMessage()
            ], 500);
        }
    }
}
