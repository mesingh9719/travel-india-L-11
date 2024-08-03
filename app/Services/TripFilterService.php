<?php

namespace App\Services;

class TripFilterService
{
    public function filter($trips, $request)
    {
        if ($request->has('pickup') && $request->pickup) {
            $trips = $trips->where('start_trip', 'like', '%' . $request->pickup . '%');
        }

        if ($request->has('dropoff') && $request->dropoff) {
            $trips = $trips->where('end_trip', 'like', '%' . $request->dropoff . '%');
        }

        if ($request->has('date') && $request->date) {
            $date = explode(' ', $request->date)[0]; // Extracting only the date part
            $trips = $trips->whereDate('date', $date);
        }

        if ($request->has('select_vehicle') && $request->select_vehicle) {
            $trips = $trips->whereHas('vehicle', function($query) use ($request) {
                $query->where('vehicle_type_id', $request->select_vehicle);
            });
        }

        return $trips;
    }
}
