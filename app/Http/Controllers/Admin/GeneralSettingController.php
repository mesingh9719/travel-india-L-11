<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $settings = GeneralSetting::pluck('value', 'key')->toArray();
        return view('admin.general_setting.index',compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'site_phone' => 'nullable|string|max:20',
            'site_address' => 'nullable|string|max:255',
            'site_logo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'site_favicon' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Get the form data
        $data = $request->only(['site_name', 'site_email', 'site_phone', 'site_address']);

        // Handle file uploads
        if ($request->hasFile('site_logo')) {
            $data['site_logo'] = CommonHelper::upload($request->file('site_logo'));
        }

        if ($request->hasFile('site_favicon')) {
            $data['site_favicon'] = CommonHelper::upload($request->file('site_favicon'));
        }

        // Update or create settings
        foreach ($data as $key => $value) {
            GeneralSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

}
