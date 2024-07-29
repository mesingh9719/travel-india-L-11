<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RideController extends Controller
{
        public function rideListing(){
            return view('frontend.ride.ride-listing');
        }

        public function  rideRequest(){
            return view('frontend.ride.ride-request');
        }

        public function  rideDetail(){
            return view('frontend.ride.ride-detail');
        }

        public function  rideRequestsList(){
            return view('frontend.ride.ride-requests-list');
        }
        
       

       
}
