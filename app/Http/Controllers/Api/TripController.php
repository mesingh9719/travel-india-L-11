<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\TripRequestStore;
use App\Http\Resources\TripResource;
use App\Models\Trip;
class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripRequestStore $tripRequestStore)
    {

        $validated = $tripRequestStore->validated();

        $start_latitude_longitude = [
            'latitude' => $validated['start_latitude'],
            'longitude' => $validated['start_longitude']
        ];

        $end_latitude_longitude = [
            'latitude' => $validated['end_latitude'],
            'longitude' => $validated['end_longitude']
        ];

        $validated['start_latitude_longitude'] = json_encode($start_latitude_longitude);
        $validated['end_latitude_longitude'] = json_encode($end_latitude_longitude);

        $trip =Trip::create($validated);
        return (new TripResource($trip))->additional(['message' => 'Trip added successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
        //
    }
}
