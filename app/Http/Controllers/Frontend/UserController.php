<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile(){
        return view('frontend.users.user-profile');
    }

    // public function register(){
    //     return view('frontend.auth.register');
    // }

    public function login(){
        return view('frontend.auth.login');
    }

    public function profileBalance(){
        return view('frontend.users.profile-balance');
    }

    public function profileEarning(){
        return view('frontend.users.profile-earning');
    }

    public function profileEdit(){
        return view('frontend.users.profile-edit');
    }

    public function driverInfo($id){
        $driver = User::find($id);

        if ($driver){
            return response()->json([
                'status' => 'success',
                'data' => $driver
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'Driver not found'
            ]);
        }
    }
}
