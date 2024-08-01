<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function vehicleTypes(){
        $vehicleTypes = VehicleType::all();
        return view('admin.vehicle_types.index',compact('vehicleTypes'));
    }

    public function index()
    {
        return view('admin.vehicles.index');
    }
}
