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

           if ($request->ajax()) {
 
            $perPage = $request->input('entriesPerPage'); // Default to 10 if not provided
            $query = Vehicle::query();
            $filter = $request->get('filter');
             if ($filter) {
                $query->where(function($q) use ($filter) {
                $q->where('rc_number', 'like', "%$filter%")
                  ->orWhere('vehicle_model', 'like', "%$filter%")
                  ->orWhere('brand', 'like', "%$filter%")
                  ->orWhere('fuel_type', 'like', "%$filter%")
                  ->orWhere('insurance_number', 'like', "%$filter%")
                  ->orWhere('fitness_certificate_number', 'like', "%$filter%")
                  ->orWhere('seat_capacity', 'like', "%$filter%")
                  ->orWhere('vehicle_name', 'like', "%$filter%")
                  ->orWhere('vehicle_color', 'like', "%$filter%")
                  ->orWhere('vehicle_permit_number', 'like', "%$filter%");
                });
            }

            $vehicles =  $query->paginate($perPage);
            return response()->json([
                'html' => view('admin.vehicles.vehicles-list', compact('vehicles'))->render(),
            ]);
        }
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function show(Vehicle $vehicle){
        return view('admin.vehicles.show',compact('vehicle'));
    }


        public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id); // Find the vehicle or throw a 404 error
        $vehicle->delete(); // Delete the vehicle
        return redirect()->back()->with('success', 'Vehicle Deleted Successfully!');

    }

  
}
