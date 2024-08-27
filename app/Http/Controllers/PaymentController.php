<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $amount = $request->amount;

        if ($autoorder && $autoorder->deposit !== null) {
            // Set up Stripe payment intent
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            try {
                $paymentIntent = \Stripe\PaymentIntent::create([
                    'amount' => $autoorder->deposit * 100,
                    'currency' => 'usd',
                    'payment_method' => $request->payment_method_id,
                    'confirmation_method' => 'manual',
                    'confirm' => true,
                ]);

                // Handle successful payment
                $autoorder->payment_status = 'Paid';
                $autoorder->save();

                return response()->json(['success' => true, 'message' => 'Payment successful!']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'message' => $e->getMessage()]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'No deposit required or invalid order.']);
        }
    }
}
