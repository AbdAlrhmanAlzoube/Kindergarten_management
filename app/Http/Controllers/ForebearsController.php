<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForebearStoreRequest;
use App\Models\Forebear;
use App\Models\User;
use Illuminate\Http\Request;

class ForebearsController extends Controller
{
    public function index()
    {


        $forebears = Forebear::all();
        return view('Admin.forebears.index', compact('forebears'));
    }

    public function show(Forebear $forebear)
    {
        return view('Admin.forebears.show', compact('forebear'));
    }

    public function create()
    {
        return view('Admin.forebears.create');
    }

    public function store(ForebearStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Upload image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $user = User::create($validatedData);
        $forebear = Forebear::create([
            'user_id' => $user->id,
            'age' => $validatedData['age'],
        ]);
    
        $forebears = Forebear::all();
        return view('Admin.forebears.index', compact('forebears'))->with('success', 'Forebear created successfully');
    }
    

    public function destroy(Forebear $forebear)
    {
        $forebear->delete();
        return redirect()->route('forebears.index')->with('success', 'Forebear deleted successfully');
    }
}
