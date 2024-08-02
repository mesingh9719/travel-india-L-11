<?php

namespace App\Services;

class VehicleFilter
{
    public function filter($request, $vehicles)
    {
        if ($request->has('search')) {
            $vehicles->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('vehicle_model')) {
            $vehicles->where('vehicle_model','like', '%' . $request->vehicle_model . '%');
        }

        if ($request->has('type')) {
            $vehicles->where('vehicle_type_id', $request->type);
        }

        if ($request->has('fuel_type')) {
            $vehicles->where('fuel_type', $request->fuel_type);
        }

        if ($request->has('is_verified')) {
            $vehicles->where('is_verified', $request->is_verified);
        }

        return $vehicles;
    }
}
