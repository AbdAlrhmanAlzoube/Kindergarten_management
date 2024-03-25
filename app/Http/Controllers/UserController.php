<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all(); 
        return view('Admin.users.index', compact('users')); 
    }

    
    public function create()
    {
        return view('Admin.users.create');
    }

 
    public function store(UserStoreRequest $request)
    {
        $validatedData = $request->validated();
   
    
        // Upload image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        // Create the user
        $user = User::create($validatedData);
    
       
   
        return redirect()->route('users.index', $user->id)->with('success', 'User created successfully');
    }
    

    public function show(User $user)
    {
        return view('Admin.users.show', compact('user'));
    }

   

   
    public function destroy(User $user)
    {
        // Delete associated children
        $user->children()->delete();
    
        // Now delete the user
        $user->delete();
    
        // Redirect to the index page with success message
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    
}
