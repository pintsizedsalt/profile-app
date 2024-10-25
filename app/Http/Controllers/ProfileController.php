<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Display all profiles
    public function index()
    {
        $profiles = Profile::all();
        return view('index', compact('profiles'));
    }

    // Show the form for creating a new profile
    public function create()
    {
        return view('create');
    }

    // Store a newly created profile in storage
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'bio' => 'nullable|string',
        ]);

        // Check if a profile with the same email already exists
        $profile = Profile::where('email', $request->email)->first();

        if ($profile) {
            // Update existing profile
            $profile->update($request->all());
        } else {
            // Create a new profile
            Profile::create($request->all());
        }

        return redirect()->route('index')->with('success', 'Profile saved successfully.');
    }


    // Display the specified profile
    public function show(Profile $profile)
    {
        return view('show', compact('profile'));
    }

    // Show the form for editing the specified profile
    public function edit(Profile $profile)
    {
        return view('edit', compact('profile'));
    }

    // Update the specified profile in storage
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'bio' => 'nullable|string',
        ]);

        $profile->update($request->all());
        return redirect()->route('index')->with('success', 'Profile updated successfully.');
    }

    // Remove the specified profile from storage
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('index')->with('success', 'Profile deleted successfully.');
    }
}
