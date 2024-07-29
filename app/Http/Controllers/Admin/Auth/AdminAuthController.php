<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');
        if (auth('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->with('error', 'The provided credentials do not match our records.');
    }
}
