<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function trackOrder(Request $request)
    {
        $id = $request->order_num;
        $apiUrl = 'https://washington.shawntransport.com/api/tracking-order';

        $response = Http::post($apiUrl, [
            'id' => $id,
        ]);
        $responseData = $response->json();

        // dd($responseData, $responseData['order'][1]->orderId);
        // dd($responseData['order'][1]);
        if ($responseData['status_code'] == 200) {
            return view('partials.orderTrackingTable', compact('responseData'));
        }
        else {
            return $responseData;
        }


    }
}
