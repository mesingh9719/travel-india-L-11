<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Models\VehicleType;
use App\Services\TripFilterService;
use Illuminate\Http\Request;


class TripController extends Controller
{
    protected TripFilterService $tripFilterService;

    public function __construct(TripFilterService $tripFilterService)
    {
        $this->tripFilterService = $tripFilterService;
    }

    public function trip(Request $request){
        $trips = Trip::query();
        $trips = $this->tripFilterService->filter($trips, $request);

        $trips = $trips->paginate(10);

        if ($request->ajax()) {
            return view('frontend.trips.partials.trip-list', compact('trips'));
        }

        return view('frontend.trips.index', compact('trips'));
    }

    public function tripDetail($id){
        $trip = Trip::find($id);
        return view('frontend.trips.trip-detail',compact('trip'));
    }


}
