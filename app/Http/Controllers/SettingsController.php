<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        return Settings::all();
    }

    public function show(Settings $setting)
    {
        return $setting;
    }

    public function store(Request $request)
    {
        $setting = Settings::create($request->all());

        return response()->json($setting, 201);
    }

    public function update(Request $request, Settings $setting)
    {
        $setting->update($request->all());

        return response()->json($setting, 200);
    }

    public function delete(Settings $setting)
    {
        $setting->delete();

        return response()->json(null, 204);
    }
}
