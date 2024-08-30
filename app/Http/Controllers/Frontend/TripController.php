<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use App\Models\VehicleType;
use App\Services\TripFilterService;
use App\Http\Requests\User\TripRequestStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TripController extends Controller
{
    protected TripFilterService $tripFilterService;

    public function __construct(TripFilterService $tripFilterService)
    {
        $this->tripFilterService = $tripFilterService;
    }

    public function findRide(Request $request){
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


    public function addTrip(TripRequestStore $request){
        DB::beginTransaction();
        try{
        $tripRequest =$request->validated();
        $user_id =['user_id'=>Auth::id(), 'vehicle_id'=>'2'];
        $tripDate =array_merge($tripRequest, $user_id);
        $trip = Trip::create($tripDate);
        DB::commit();
        return redirect()->route('dashboard.index')->with('success', 'Trip Added Successfully');
    } catch (\Exception $e) {
        DB::rollback();
        return back()->with('error', 'Went Something wrong' . $e->getMessage());
    }
    }


}
