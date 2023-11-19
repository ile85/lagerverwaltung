<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Item;
use App\Models\Location;

// Include other necessary models

class RentalController extends Controller
{
    /**
     * Display a listing of the rentals.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentals = Rental::with(['item', 'location'])->get(); // Include other relationships if needed
        return view('rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new rental.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $locations = Location::all();
        // Fetch other necessary data

        return view('rentals.create', compact('items', 'locations'));
    }

    /**
     * Store a newly created rental in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'student_email' => 'required|email', // Ensure the email is provided and valid
        'item_id' => 'required',
        'location_id' => 'required',
        // Add other validation rules
    ]);

    Rental::create($request->all()); // This assumes your Rental model has the appropriate fillable fields
    return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
}

    /**
     * Display the specified rental.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    /**
     * Show the form for editing the specified rental.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        $items = Item::all();
        $locations = Location::all();
        // Fetch other necessary data

        return view('rentals.edit', compact('rental', 'items', 'locations'));
    }

    /**
     * Update the specified rental in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
{
    $request->validate([
        'item_id' => 'required',
        'location_id' => 'required',
        'student_email' => 'required|email',
        'student_name' => 'required',
        // Add other validation rules
    ]);

    Rental::create($request->all());
    return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
}

    /**
     * Remove the specified rental from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index')->with('success', 'Rental deleted successfully.');
    }
}

