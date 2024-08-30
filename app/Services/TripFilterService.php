<?php

namespace App\Services;

use Illuminate\Support\Carbon;

class TripFilterService
{
    public function filter($trips, $request)
    {
        if ($request->has('pickup') && $request->pickup) {
            $trips = $trips->where('pickup_location', 'like', '%' . $request->pickup . '%');
        }

        if ($request->has('dropoff') && $request->dropoff) {
            $trips = $trips->where('drop_location', 'like', '%' . $request->dropoff . '%');
        }

        if ($request->has('date') && $request->date) {
            try {
                $date = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
            } catch (\Exception $e) {
                return response()->json(['error' => 'Invalid date format'], 400);
            }

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
