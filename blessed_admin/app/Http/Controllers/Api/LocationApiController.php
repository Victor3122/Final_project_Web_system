<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationApiController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return $locations;
    }

    public function show($id)
    {
        $location = Location::findOrFail($id);
        return $location;
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email|unique:locations',
        ]);

        $location = Location::create($request->all());
        return $location;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'city' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
            'email' => 'email|unique:locations,email,'.$id,
        ]);

        $location = Location::findOrFail($id);
        $location->update($request->all());
        return $location;
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return response()->json(['message' => 'Location deleted successfully']);
    }
}