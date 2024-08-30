<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\Auth;
class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile =User::find(Auth::id());
        return view('frontend.users.profile', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        
        $profile = User::findOrFail($id);
        $file = $request->file('image');
        if($file !=""){
            $profileImage = CommonHelper::upload($file);
            $image = ['profile_image'=>$profileImage];
            $profile->update($image);
            return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully!');
        }else{
            $profile->update($request->only(['full_name', 'mobile', 'alternate_Mobile', 'home_state', 'home_city', 'home_zip', 'home_address']));
            return redirect()->route('profile.index')
            ->with('success', 'Profile updated successfully!');
        }
        
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
