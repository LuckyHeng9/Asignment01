<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
    public function index()
    {
        $features = Feature::all();
        return view('features.index', compact('features'));
    }
    public function create()
    {
        return view('features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('features', 'public');


        Feature::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('features.index')->with('success', 'Feature created.');
    }


    public function edit(Feature $feature)
    {
        return view('features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = ['title' => $request->title];

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('features', 'public');
        }

        $feature->update($data);

        return redirect()->route('features.index')->with('success', 'Feature updated.');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('features.index')->with('success', 'Feature deleted.');
    }

    public function show()
    {
        $features = Feature::all();
        return view('page.feature', compact('features'));
    }
}
