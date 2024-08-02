<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Services\VehicleFilter;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected VehicleFilter $vehicleFilter;

    public function __construct(VehicleFilter $vehicleFilter)
    {
        $this->vehicleFilter = $vehicleFilter;
    }
    public function vehicleTypes(){
        $vehicleTypes = VehicleType::all();
        return view('admin.vehicle_types.index',compact('vehicleTypes'));
    }

    public function index(Request $request)
    {
        $vehicles = Vehicle::query();
        $vehicles = $this->vehicleFilter->filter($request, $vehicles);
        $vehicles = $vehicles->latest()->paginate(10);

        if ($request->ajax()){
            return response()->json([
                'view' => view('admin.vehicles.vehicles-list', compact('vehicles'))->render(),
                'paginationHtml' => view('admin.vehicles.pagination', compact('vehicles'))->render(),
                'currentPage' => $vehicles->currentPage(),
                'lastPage' => $vehicles->lastPage(),
            ]);
        }

        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function show(Vehicle $vehicle){
        return view('admin.vehicles.show',compact('vehicle'));
    }
}
