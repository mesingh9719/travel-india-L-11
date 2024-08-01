<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarContoller extends Controller
{
    public function cars(){
        return view('frontend.cars.index');
    }
    public function carsProfile(){
        return view('frontend.cars.cars');
    }

    public function carsDetails(){
        return view('frontend.cars.car-details');
    }

    public function  createRouteNotification(){
        return view('frontend.cars.create-route-notification');
    }

    public function  submitCarIntro(){
        return view('frontend.cars.submit-car-intro');
    }


    public function  submitCarForRent(){
        return view('frontend.cars.submit-car-for-rent');
    }

    public function  submitRoute(){
        return view('frontend.cars.submit-route');
    }


}
