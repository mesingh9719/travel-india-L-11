<?php

namespace App\Services;

use Illuminate\Http\Request;

class UserFilter
{
    public function filter(Request $request, $query)
    {
        if ($request->has('search')) {
            $query->where('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('last_name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('mobile', 'like', '%' . $request->search . '%');
        }

        if ($request->has('user_type_id')) {
            $query->where('user_type_id', $request->user_type_id);
        }

        return $query;
    }
}
