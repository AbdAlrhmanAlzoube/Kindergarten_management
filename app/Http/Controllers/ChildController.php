<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChildStoreRequest;
use App\Models\Child;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;

class ChildController extends Controller
{
   
    // public function index()
    // {
    //     $children = Child::all();   
    //     return view('Admin.children.index', compact( 'children'));
    // }
    public function index()
    {
        $children = Child::all();
        return view('Admin.children.index', compact('children'));
    }

    public function show(User $user, Child $child)
    {
        return view('Admin.children.show', compact('user', 'child'));
    }
    

    
    public function create(User $user)
    {
        return view('Admin.children.create', compact('user'));
    }

 
    public function store( ChildStoreRequest $request)
    {
        $validatedData = $request->validated();
        // Upload image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        $user=User::create($validatedData);
        $child =Child::create([
          'user_id' => $user->id,
          'age' => $validatedData['age'],
          'education_stage' => $validatedData['education_stage'],
        ]);
        $children = Child::all();
        return  view('Admin.children.index',compact('children'));
        // redirect()->route('children.index')->with('success', 'Child created successfully')->with('children', $children);
    }
    


    public function destroy( Child $child)
    {
        
        $child->delete();
    
        return redirect()->route('children.index')->with('success', 'Child deleted successfully');
    }
}
