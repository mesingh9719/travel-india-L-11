<?php

namespace App\services;

use Illuminate\Database\Eloquent\Builder;
class VehicleTable
{
    /**
     * Create a new class instance.
     */

    public function filter($request, Builder $query)
        {
            // Apply custom filters
            if ($request->has('customFilter')) {
                $customFilter = $request->input('customFilter');
                $query->where('rc_number', 'like', "%$customFilter%");
            }
    
            return $query;
        }


        public function getVehicles()
        {
            // Logic to get vehicle data
            return ['Car', 'Truck', 'Motorcycle'];
        }
}
