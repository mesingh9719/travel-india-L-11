<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserAuthController extends Controller
{
    public function sendOtp(Request $request)
    {
        $request->validate([
            'mobile' => 'required|numeric|digits:10',
        ]);

        // Check if the mobile number exists in the database
        $user = User::where('mobile', $request->mobile)->first();

        if (!$user) {
            return response()->json(['message' => 'The provided mobile number is not registered. Please check the number or sign up.'], 404);
        }

        // Send the OTP using the MSG91 API
        $response = Http::post('https://control.msg91.com/api/v5/otp', [
            'template_id' => env('OTP_TEMPLATE_ID'),
            'mobile' => '91' . $request->mobile,
            'authkey' => env('OTP_API_KEY'),
            'realTimeResponse' => '1',
        ]);

        $responseBody = $response->json();

        // Check for errors in the API response
        if ($response->failed() || (isset($responseBody['type']) && $responseBody['type'] == 'error')) {
            return response()->json([
                'message' => $responseBody['message'] ?? 'Failed to send OTP. Please try again later.'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully to ' . $request->mobile . '. Please enter the OTP to proceed.',
            'data' => $responseBody,
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $otp = $request->input('otp');
        $mobile = '91' . $request->input('mobile');
        $authkey = env('OTP_API_KEY');

        $response = Http::withHeaders([
            'authkey' => $authkey,
        ])->get('https://control.msg91.com/api/v5/otp/verify', [
            'otp' => $otp,
            'mobile' => $mobile,
        ]);

        if ($response->failed() || $response['type'] === 'error') {
            $message = $response['message'] ?? 'Failed to verify OTP. Please try again.';
            return response()->json(['message' => $message], 400);
        }

        $user = User::where('mobile', $request->input('mobile'))->firstOrFail();
        Auth::login($user);

        return response()->json([
            'success' => true,
            'message' => 'OTP verified successfully. Redirecting to dashboard...',
            'redirect' => route('dashboard.index'),
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

}
