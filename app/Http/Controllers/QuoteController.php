<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\QuoteVehicleInfo;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    use ImageUploadTrait;

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'available_at_auction' => 'required|in:0,1',
    //         'link' => 'nullable',
    //         'name' => 'required|string|max:255',
    //         'phone' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255',
    //         'trailer_type' => 'required|string|max:255',
    //         'condition' => 'required|string|max:255',
    //         'modification' => 'nullable|in:0,1',
    //         'modify_info' => 'nullable|string|max:255',
    //         'image' => 'nullable|image|max:2048',
    //         'origin' => 'required|string|max:255',
    //         'destination' => 'required|string|max:255',
    //         'vehicles.*.year' => 'required|integer|min:1936',
    //         'vehicles.*.make' => 'required|string|max:255',
    //         'vehicles.*.model' => 'required|string|max:255',
    //     ]);

    //     $originValues = explode(',', $validatedData['origin']);
    //     $validatedData['origin_zip'] = isset($originValues[2]) ? trim($originValues[2]) : null;
    //     $validatedData['origin_city'] = isset($originValues[0]) ? trim($originValues[0]) : null;
    //     $validatedData['origin_state'] = isset($originValues[1]) ? trim($originValues[1]) : null;

    //     $destinationValues = explode(',', $validatedData['destination']);
    //     $validatedData['destination_zip'] = isset($destinationValues[2]) ? trim($destinationValues[2]) : null;
    //     $validatedData['destination_city'] = isset($destinationValues[0]) ? trim($destinationValues[0]) : null;
    //     $validatedData['destination_state'] = isset($destinationValues[1]) ? trim($destinationValues[1]) : null;

    //     $quote = Quote::create($validatedData);

    //     if ($request->hasFile('image')) {
    //         $quote->image = $this->uploadImage('quote_images', $request->file('image'));
    //         $quote->save();
    //     }

    //     $years = $request->input('year');
    //     $makes = $request->input('make');
    //     $models = $request->input('model');

    //     foreach ($years as $key => $year) {
    //         $vehicleData = [
    //             'year' => $year,
    //             'make' => $makes[$key],
    //             'model' => $models[$key],
    //         ];
    //         $quote->vehicles()->create($vehicleData);
    //     }

    //     return back()->with('success', 'Quote created successfully');
    // }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($request->toArray());
        // dd(count($data['year']));
        // if (isset($data['count'])) {
        $heading = $this->generateHeading($data);
        $name = $request->input('name', null);
        $email = $request->input('email', null);
        $phone = $request->input('phone', null);
        // $year = $this->generateStringFromArray($data['year']);
        // $make = $this->generateStringFromArray($data['make']);
        // $model = $this->generateStringFromArray($data['model']);
        $year = $data['year'];
        $make = $data['make'];
        $model = $data['model'];
        $condition = $data['condition'];
        $originData = $request->input('origin', null);
        $destinationData = $request->input('destination', null);
        $additional = $request->input('add_info', null);
        // $transport = $this->generateStringFromArray($request->input('carrier-type', [2]));
        $transport = $request->input('trailer_type', [2]);
        $shippingdate = $request->input('dates', null);
        $link = $request->input('link', null);
        $modification = $request->input('modification', null);
        $modify_info = $request->input('modify_info', null);
        $image = $request->input('image', null);
        $ip = $request->ip();
        dd($ip);
        $ip_details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $ipcity = $ip_details ? $ip_details->city : null;
        $ipregion = $ip_details ? $ip_details->region : null;
        $ipcountry = $ip_details ? $ip_details->country : null;
        $iploc = $ip_details ? $ip_details->loc : null;
        $ippostal = $ip_details ? $ip_details->postal : null;

        $vehicles = [];
        foreach ($data['year'] as $index => $count) {
            $vehicles[] = [
                'year' => $data['year'][$index],
                'make' => $data['make'][$index],
                'model' => $data['model'][$index]
            ];
        }

        $post_array = [
            'appkey' => '0EO9KCH9NNI46HH60WOL5OW4TE0GCD6Y',
            'domain' => 'https://shawntransport.com',
            'product_url' => 'https://shipa1.com',
            'oname' => $name,
            'oemail' => $email,
            'ophone' => $phone,
            'ymk' => $heading,
            'vehicles' => $vehicles,
            'condition' => $condition,
            'originzsc' => $originData,
            'destinationzsc' => $destinationData,
            'add_info' => $additional,
            'transport' => $transport,
            'shippingdate' => $shippingdate,
            'car_type' => 1,
            'paneltype' => 2,
            'cname' => $name,
            'cemail' => $email,
            'main_ph' => $phone,
            'ip' => $ip,
            'ipcity' => $ipcity,
            'ipregion' => $ipregion,
            'ipcountry' => $ipcountry,
            'iploc' => $iploc,
            'ippostal' => $ippostal,
            'link' => $link,
            'modification' => $modification,
            'modify_info' => $modify_info,
            'image' => $image,
        ];

        $result = $this->sendRequest($post_array);

        // return response()->json($result);
        return back()->with('success', 'Quote created successfully');
        // } else {
        //     return response()->json([
        //         'response' => 'error',
        //         'message' => 'POST is required to use this function'
        //     ]);
        // }
    }

    private function generateHeading($data)
    {
        $heading = '';
        foreach ($data['year'] as $index => $count) {
            if (isset($data['year'][$index]) && isset($data['make'][$index]) && isset($data['model'][$index])) {
                $heading .= $data['year'][$index] . ' ' . $data['make'][$index] . ' ' . $data['model'][$index] . '*^';
            }
        }
        return rtrim($heading, '*^');
    }

    private function generateStringFromArray($array)
    {
        return count($array) > 1 ? implode('*^', $array) : $array[0];
    }

    private function sendRequest($post_array)
    {
        return Http::post('https://washington.shawntransport.com/api/v2/website-quote', $post_array)->json();
    }
}
