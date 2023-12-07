<?php

namespace App\Http\Controllers;

use App\Models\Location; // Ensure you import the Location model
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $fillable = ['name', 'address', 'city'];
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', ['locations' => $locations]);
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ort' => 'required|max:255',
            'adresse' => 'required|max:255',
        ]);

        Location::create($validatedData);
        return redirect()->route('locations.index');
    }

    public function show($id)
{
    // Assuming you have a 'items' relationship defined in the Location model that retrieves associated items.
    $location = Location::with('items')->findOrFail($id);
    return view('locations.show', ['location' => $location]);
}

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ort' => 'required|max:255',
            'adresse' => 'required|max:255',
        ]);

        $location = Location::findOrFail($id);
        $location->update($validatedData);
        return redirect()->route('locations.index')->with('success', 'Standort updated successfully');
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->route('locations.index');
    }
}
