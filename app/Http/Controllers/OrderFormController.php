<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;

class OrderFormController extends Controller
{
    public function index()
    {
        return view('frontend.pages.orderForm');
    }
    
    // public function verifyEmail(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //     ]);
        
    //     $email = $request->input('email');
    //     $verificationCode = $this->generateVerificationCode();
    //     $this->sendVerificationCodeByEmail($email, $verificationCode);

    //     return view('frontend.pages.orderForm', compact('data', 'ip_address', 'userid', 'verificationCode'));
    // }

    // public function getOrderDetails($id, $userid, Request $request)
    public function getOrderDetails(Request $request)
    {
        $id = $request->order_id;
        $email = $request->email;
        $response = Http::get("https://washington.shawntransport.com/api/email_order_api/{$id}/{$email}");

        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['data'];
            $ip_address = $responseData['ip'];

            // $verificationCode = $this->generateVerificationCode();

            // $this->sendVerificationCodeByEmail($request->input('email'), $verificationCode);

            return view('partials.order_detail', compact('data', 'ip_address'));
        } else {
            $errorMessage = $response->json()['error'] ?? 'Failed to fetch data from API';
            $statusCode = $response->status();
    
            return response($errorMessage, $statusCode);
        }
    }

    private function generateVerificationCode()
    {
        return mt_rand(100000, 999999);
    }

    private function sendVerificationCodeByEmail($email, $verificationCode)
    {
        // dd($email, $verificationCode);
        Mail::to($email)->send(new VerificationCodeMail($verificationCode));
    }

    public function verify(Request $request)
    {
        $submittedCode = $request->input('verification_code');
        $storedCode = $request->session()->get('verification_code');

        if ($submittedCode == $storedCode) {
            // Code is verified, proceed with your logic
            // Hide email section and show new section
            // Redirect or return view accordingly
        } else {
            // Code verification failed, handle accordingly
        }
    }
}
