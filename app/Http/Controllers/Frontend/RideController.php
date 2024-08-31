<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Ride\RideRequestStore;
use App\Http\Resources\Api\RideResource;
use App\Models\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RideRequestStore $request)
    {
        $validated = $request->validated();

        $validated = array_merge($validated, [
            'user_id' => auth()->user()->id,
            'vehicle_id' => auth()->user()->assignedVehicle->id
        ]);

        Ride::create($validated);

        return redirect()->back()->with('success', 'Ride created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        //
    }
}
