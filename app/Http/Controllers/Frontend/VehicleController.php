<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['id' => 3, 'name' => 'Sam Brown', 'email' => 'sam@example.com'],
        ];
        return view('frontend.ride.vehicle-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $images = [];
        
       return view('frontend.ride.add-vehicle', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('file') );
        // Validate the request
        $request->validate([
            'file.*' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048', // Validate each file
            // 'outside_pictures.*' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048', // Validate each file
        ]);

        // Initialize an array to store file paths
        $filePaths = [];

        // Loop through each file and store it
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                // $path = $file->store('images', 'public');
                $path =  CommonHelper::upload($file);
                $filePaths[] = $path;
            }
        }

        // Return response
        return response()->json([
            'success' => true,
            'files' => $filePaths
        ]);
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
