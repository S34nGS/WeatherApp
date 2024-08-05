<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SavedLocation;
use Illuminate\Support\Facades\Auth;

class SavedLocationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "location_country" => "required|string|max:255",
            "location_city" => "required|string|max:255",
        ]);

        $savedLocation = new SavedLocation([
            "location_country" => $request->input("location_country"),
            "location_city" => $request->input("location_city"),
            'user_id' => Auth::id(),
        ]);

        // $savedLocation->save();
        $savedLocation->user_id = Auth::id();
        $savedLocation->save();

        // return response()->json(['message' => 'Location saved successfully.']);
        return redirect()->back()->with('status', 'Location saved successfully.');
    }

    public function index()
    {
        return Auth::user()->savedLocations;
    }

    public function destroy($id)
    {
        $savedLocation = SavedLocation::findOrFail($id);
        if ($savedLocation->user_id === Auth::id()) {
            $savedLocation->delete();
            return response()->json(['message' => 'Location deleted successfully.']);
        }
        return response()->json(['message' => 'Unauthorized.'], 403);
    }
}
