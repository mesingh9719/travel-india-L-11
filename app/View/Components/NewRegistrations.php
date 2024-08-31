<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewRegistrations extends Component
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
        $newRegistrations = User::where('created_at', '>=', now()->subDays(7))->get(['full_name', 'email', 'mobile','user_type_id','id','is_verified','is_active','is_rejected']);
        return view('components.new-registrations',compact('newRegistrations'));
    }
}
