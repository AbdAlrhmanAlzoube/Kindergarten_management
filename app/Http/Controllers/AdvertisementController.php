<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Requests\AdvertisementStoreRequest;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('Admin.advertisements.index', compact('advertisements'));
    }

    public function create()
    {
        return view('Admin.advertisements.create');
    }

    public function store(AdvertisementStoreRequest $request)
    {
        $validatedData = $request->validated();
    
        $imagePath = $request->file('image')->store('advertisements');
        $validatedData['image'] = $imagePath;
    
        Advertisement::create($validatedData);
    
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement created successfully.');
    }
    

    public function show(Advertisement $advertisement)
    {
        return view('Admin.advertisements.show', compact('advertisement'));
    }

    public function edit(Advertisement $advertisement)
    {
        return view('Admin.advertisements.edit', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('advertisements');
            $validatedData['image'] = $imagePath;
        }

        $advertisement->update($validatedData);

        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement updated successfully.');
    }

    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement deleted successfully.');
    }
}
