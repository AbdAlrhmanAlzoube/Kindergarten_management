<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Child;
use App\Models\Course;
use App\Models\Review;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AddReviewController extends Controller
    {
        public function index()
        {
            $reviews = Review::all();
            return view('Dashboard.Teacher.pages.index', compact('reviews'));
        }
    
        public function create()
        {
         
            $children = Child::all();
            $teachers = Teacher::all();
            $courses = Course::all();
            return view('Dashboard.Teacher.pages.create', compact('children', 'teachers', 'courses'));
        }
    
        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'child_id' => 'required|exists:children,id',
            'teacher_id' => 'required|exists:teachers,id',
            'course_id' => 'required|exists:courses,id',
            'level' => 'required',
        ]);
    
        // Include 'child_id' when creating a new review
        $reviewData = array_merge($validatedData, ['child_id' => $request->input('child_id')]);
    
        Review::create($reviewData);
    
        return redirect()->route('teacher_review.index')->with('success', 'Review added successfully.');
    }
    
    
        // public function store(Request $request)
        // {
        //     $validatedData = $request->validate([
        //         'child_id' => 'required|exists:children,id',
        //         'teacher_id' => 'required|exists:teachers,id',
        //         'course_id' => 'required|exists:courses,id',
        //         'level' => 'required',
        //     ]);
    
        //     Review::create($validatedData);
    
        //     return redirect()->route('reviews.index')->with('success', 'Review added successfully.');
        // }
    
        public function show($id)
        {
            // Fetch the review by ID to ensure it's an object, not a string
            $review = Review::findOrFail($id);
        
            return view('Dashboard.Teacher.pages.show', compact('review'));
        }
        public function edit(Review $review)
        {
            $children = Child::all();
            $teachers = Teacher::all();
            $courses = Course::all();
            return view('Dashboard.Teacher.pages.edit', compact('review', 'children', 'teachers', 'courses'));
        }
    
        public function update(Request $request, Review $review)
        {
            $validatedData = $request->validate([
                'child_id' => 'required|exists:children,id',
                'teacher_id' => 'required|exists:teachers,id',
                'course_id' => 'required|exists:courses,id',
                'level' => 'required',
            ]);
    
            $review->update($validatedData);
    
            return redirect()->route('teacher_review.index')->with('success', 'Review updated successfully.');
        }
    }

