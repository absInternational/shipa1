<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\VehicleName;
use App\Models\ZipCode;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Country;

class MainController extends Controller
{
    
    public function trackOrder(Request $request)
    {
        $id = $request->order_num;
        $apiUrl = 'https://washington.shawntransport.com/api/tracking-order';
    
        try {
            $response = Http::post($apiUrl, ['id' => $id]);
    
            // Check if the API request was successful
            if (!$response->successful()) {
                Log::error('API Request Failed', ['status' => $response->status(), 'body' => $response->body()]);
                return response()->json(['status_code' => $response->status(), 'message' => 'Request failed'], 500);
            }
    
            $responseData = $response->json();
    
            if ($responseData['status_code'] == 200) {
                if (!empty($request->modal)) {
                    return view('partials.orderTrackingTableModal', compact('responseData'));
                }
                return view('partials.orderTrackingTable', compact('responseData'));
            } 
    
            return $responseData;
        } catch (\Exception $e) {
            Log::error('Track Order Exception', ['error' => $e->getMessage()]);
            return response()->json(['status_code' => 500, 'message' => 'Internal Server Error'], 500);
        }
    }
    

    // public function getmake(Request $request)
    // {
    //     $searchOrigin = $request->term;
    //     $origin = array();

    //     $selectOri = VehicleName::select('make')
    //         ->where('make', 'LIKE', $searchOrigin . '%')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('make')
    //         ->orderBy('make', 'ASC')
    //         ->limit(10)
    //         ->get();

    //     if ($selectOri->isNotEmpty()) {
    //         foreach ($selectOri as $val) {
    //             $origin[] = $val->make;
    //         }
    //     }

    //     return $origin;
    // }

    // public function getmodel(Request $request)
    // {
    //     $year = $request->year;
    //     $make = $request->make;
    //     $searchOrigin = $request->term;
    //     $model = [];

    //     $selectOri = VehicleName::select('model')
    //         ->where('model', 'LIKE', $searchOrigin . '%')
    //         ->where('make', 'LIKE', $make . '%')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('model')
    //         ->orderBy('model', 'ASC')
    //         ->limit(10)
    //         ->get();

    //     if ($selectOri->isNotEmpty()) {
    //         foreach ($selectOri as $val) {
    //             $model[] = $val->model;
    //         }
    //     }

    //     return response()->json($model);
    // }

    public function getmake(Request $request)
    {
        $searchOrigin = $request->term;

        $origin = VehicleName::where('make', 'LIKE', $searchOrigin . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->limit(10)
            ->pluck('make');

        return response()->json($origin);
    }

    public function getmodel(Request $request)
    {
        $year = $request->year;
        $make = $request->make;
        $searchOrigin = $request->term;

        $model = VehicleName::where('model', 'LIKE', $searchOrigin . '%')
            ->where('make', 'LIKE', $make . '%')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('model')
            ->orderBy('model', 'ASC')
            ->limit(10)
            ->pluck('model');

        return response()->json($model);
    }


    // public function getmodel(Request $request)
    // {
    //     $year = $request->year;
    //     $make = $request->make;
    //     $searchOrigin = $request->term;
    //     $model = array();

    //     $selectOri = VehicleName::select('model')
    //         ->where('model', 'LIKE', $searchOrigin . '%')
    //         ->where('make', 'LIKE', $make . '%')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('model')
    //         ->orderBy('model', 'ASC')
    //         ->limit(10)
    //         ->get();

    //     if ($selectOri->isNotEmpty()) {
    //         foreach ($selectOri as $val) {
    //             $model[] = $val->model;
    //         }
    //     }
    //     return $model;
    // }

    // public function get_zip(Request $request)
    // {
    //     $searchOrigin = $request->input;
    //     $origin = [];

    //     $selectOri = ZipCode::select('city', 'state', 'zipcode')
    //         ->where('zipcode', 'LIKE', $searchOrigin . '%')
    //         ->orWhere('city', 'LIKE', $searchOrigin . '%')
    //         ->limit(10)
    //         ->get();

    //     if ($selectOri->isNotEmpty()) {
    //         foreach ($selectOri as $val) {
    //             $origin[] = $val->city . "," . $val->state . "," . $val->zipcode;
    //         }
    //     }

    //     return $origin;
    // }

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

    // public function get_subcategories(Request $request)
    // {
    //     $categoryId = $request->category;

    //     $subcategories = Subcategory::where('category_id', $categoryId)->get();
    //     return response()->json($subcategories);
    // }

    public function get_subcategories(Request $request)
    {
        $categoryId = $request->category;

        $subcategories = Subcategory::where('category_id', $categoryId)
            ->select('id', 'name', 'slug', 'description')
            ->get()
            ->map(function($subcategory) {
                return [
                    'id' => $subcategory->id,
                    'name' => $subcategory->name,
                    'slug' => route('subcategory.show', $subcategory->slug),
                    'description' => $subcategory->description,
                ];
            });

        return response()->json([
            'success' => true,
            'data' => $subcategories
        ]);
    }

    // public function partialForm(Request $request)
    // {
    //     $makes = VehicleName::select('make')
    //         ->where('UserId', 14)
    //         ->where('status', 0)
    //         ->groupBy('make')
    //         ->orderBy('make', 'ASC')
    //         ->get();

    //     $categories = Category::all();

    //     $vehicleType = $request->vehicleType;

    //     if ($request->vehicleType == 'Car') {
    //         return view('partials.forms.car2', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Golf-Cart') {
    //         return view('partials.forms.golf-cart', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Atv') {
    //         return view('partials.forms.atv', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Boat-Transport') {
    //         return view('partials.forms.boat', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Freight-Transportation') {
    //         return view('partials.forms.freight', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Heavy-Equipment') {
    //         return view('partials.forms.heavy', compact('makes', 'vehicleType', 'categories'));
    //     } elseif ($request->vehicleType == 'Motorcycle') {
    //         return view('partials.forms.motorcycle', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'RV-Transport') {
    //         return view('partials.forms.rv', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Excavator-Tr') {
    //         return view('partials.forms.excavator', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Commercial-Truck') {
    //         return view('partials.forms.commercial-truck', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Construction-Transport') {
    //         return view('partials.forms.construction-transport', compact('makes', 'vehicleType'));
    //     } elseif ($request->vehicleType == 'Farm-Transport') {
    //         return view('partials.forms.farm-transport', compact('makes', 'vehicleType'));
    //     }
    // }

    public function partialForm(Request $request)
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();

        $categories = Category::all();

        $vehicleType = $request->vehicleType;

        $vehicleForms = [
            'Car' => 'car2',
            'Golf-Cart' => 'golf-cart',
            'Atv' => 'atv',
            'Boat-Transport' => 'boat',
            'Freight-Transportation' => 'freight',
            'Heavy-Equipment' => 'heavy',
            'Motorcycle' => 'motorcycle',
            'RV-Transport' => 'rv',
            'Excavator-Tr' => 'excavator',
            'Commercial-Truck' => 'commercial-truck',
            'Construction-Transport' => 'construction-transport',
            'Farm-Transport' => 'farm-transport'
        ];

        if (array_key_exists($vehicleType, $vehicleForms)) {
            $formView = 'partials.forms.' . $vehicleForms[$vehicleType];
            return view($formView, compact('makes', 'vehicleType', 'categories'));
        }

        return response()->json(['error' => 'Invalid vehicle type'], 404);
    }

    // public function getCountry(Request $request)
    // {
    //     $search = $request->input('search');

    //     $countries = Country::where('name', 'like', '%' . $search . '%')
    //         ->orWhere('short', 'like', '%' . $search . '%')
    //         ->get();

    //     return response()->json($countries);
    // }

    public function getCountry(Request $request)
    {
        $search = $request->input('search');
        
        $countries = Country::where('name', 'like', '%' . $search . '%')
            ->orWhere('short', 'like', '%' . $search . '%')
            ->paginate(10);

        return response()->json($countries);
    }

}
