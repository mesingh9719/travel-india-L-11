<?php

namespace App\View\Components;

use App\Models\VehicleType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RideSearch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $vehicleTypes = VehicleType::all();
        return view('components.ride-search',compact('vehicleTypes'));
    }
}
