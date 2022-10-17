<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store listing data
    public function store(Request $request) {
        $formFields = $request->validate([
            'headline' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('newsimage')) {
            $formFields['newsimage'] = $request->file('newsimage')->store('newsimages', 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }

    //Show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    //Update Listing Data
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'headline' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('newsimage')) {
            $formFields['newsimage'] = $request->file('newsimage')->store('newsimages', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully');
    }
}
