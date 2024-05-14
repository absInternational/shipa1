<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\VehicleName;
use App\Models\ZipCode;

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

        // dd($responseData);
        // dd($responseData['order'][1]);
        if ($responseData['status_code'] == 200) {
            return view('partials.orderTrackingTable', compact('responseData'));
        } else {
            return $responseData;
        }
    }

    public function getmake(Request $request)
    {
        $searchOrigin = $request->term;
        $origin = array();

        $selectOri = VehicleName::select('make')
            ->where('make', 'LIKE', $searchOrigin . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $origin[] = $val->make;
            }
        }

        return $origin;
    }

    public function getmodel(Request $request)
    {
        $year = $request->year;
        $make = $request->make;
        $searchOrigin = $request->term;
        $model = array();

        $selectOri = VehicleName::select('model')
            ->where('model', 'LIKE', $searchOrigin . '%')
            ->where('make', 'LIKE', $make . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('model')
            ->orderBy('model', 'ASC')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $model[] = $val->model;
            }
        }
        // dd($model);
        return $model;
    }

    public function get_zip(Request $request)
    {
        $searchOrigin = $request->input;
        $origin = [];

        $selectOri = ZipCode::select('city', 'state', 'zipcode')
            ->where('zipcode', 'LIKE', $searchOrigin . '%')
            ->orWhere('city', 'LIKE', $searchOrigin . '%')
            ->limit(10)
            ->get();

        if ($selectOri->isNotEmpty()) {
            foreach ($selectOri as $val) {
                $origin[] = $val->city . "," . $val->state . "," . $val->zipcode;
            }
        }

        return $origin;
    }
}
