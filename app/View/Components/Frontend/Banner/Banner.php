<?php

namespace App\View\Components\frontend\Banner;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
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
        $bannerText =['dashboard.index'=>'Dashboard', 'profile.index'=>'My Profile', 'total-bookings.index'=>'My Booking', 'cancel-bookings.index'=>'Cancel Booking', 'payment-history.index'=>'Payment History', 'user-setting.index'=>'Settings'];
        return view('components.frontend.banner.banner', compact('bannerText'));
    }
}
