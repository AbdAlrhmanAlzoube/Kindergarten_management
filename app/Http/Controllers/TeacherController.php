<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreRequest;
use App\Http\Requests\TeacherUpdateRequest;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(TeacherStoreRequest $request)
    {
        $validatedData = $request->validated();
        
        // Create a new teacher
        $user = User::create($validatedData);
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'experience_years' => $validatedData['experience_years'],
            'course_name' => $validatedData['course_name'],
            'age' => $validatedData['age'],
            'password' => $validatedData['password'] ?? null,
        ]);
        
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully');
    }
    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {
       
        $validatedData = $request->validated();
        
        // Create a new teacher
        $user = User::create($validatedData);
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'experience_years' => $validatedData['experience_years'],
            'course_name' => $validatedData['course_name'],
            'age' => $validatedData['age'],
        ]);
        
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
