<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleName;

class FormVehicleController extends Controller
{
    public function car()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
            
        return view('frontend.forms.car', compact('makes'));
    }

    public function motorcycle()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
            
        return view('frontend.forms.motorcycle', compact('makes'));
    }

    public function golf_cart()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
            
        return view('frontend.forms.golf_cart', compact('makes'));
    }

    public function atv_utv()
    {
        $makes = VehicleName::select('make')
            ->where('UserId', 14)
            ->where('status', 0)
            ->groupBy('make')
            ->orderBy('make', 'ASC')
            ->get();
            
        return view('frontend.forms.atv_utv', compact('makes'));
    }
}
