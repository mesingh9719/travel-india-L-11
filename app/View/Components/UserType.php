<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserType extends Component
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
        $userTypes = \App\Models\UserType::all();
        // get only owner and driver
        $userTypes = $userTypes->whereIn('name', ['Owner', 'Driver']);
        return view('components.user-type',compact('userTypes'));
    }
}
