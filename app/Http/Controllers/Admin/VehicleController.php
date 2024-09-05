<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Services\VehicleFilter;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;

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
        $vehicles = Vehicle::paginate(10); 
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function show(Vehicle $vehicle){
        return view('admin.vehicles.show',compact('vehicle'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $perPage = $request->input('entriesPerPage'); // Default to 10 if not provided
            $query = Vehicle::query();
            $rc_number = $request->get('rc_number');

            // Build query with filters
            $query = Vehicle::query();

            if ($rc_number) {
                $query->where('rc_number', 'like', "%$rc_number%");
            }
            $vehicles =  $query->paginate($perPage);
            return response()->json([
                'html' => view('admin.vehicles.vehicles-list', compact('vehicles'))->render(),
            ]);
        }
    }
}
