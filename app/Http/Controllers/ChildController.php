<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class ChildController extends Controller
{
   
    public function index(User $user)
    {
        $children = $user->children()->get();
        return view('Admin.children.index', compact('children'));
    }

    
    public function create(User $user)
    {
        return view('Admin.children.create', compact('user'));
    }

 
    public function store(User $user, UserStoreRequest $request)
    {
        $validatedData = $request->validated();
   
        // Upload image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        // Create the child
        $user->children()->create($validatedData);
    
        return redirect()->route('users.children.index', $user->id)->with('success', 'Child created successfully');
    }
    

    public function show(User $user, Child $child)
    {
        return view('Admin.children.show', compact('user', 'child'));
    }

    public function destroy(User $user, Child $child)
    {
        // Delete the child
        $child->delete();
    
        return redirect()->route('users.children.index', $user->id)->with('success', 'Child deleted successfully');
    }
}
