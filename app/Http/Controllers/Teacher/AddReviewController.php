<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Child;
use App\Models\Course;
use App\Models\Review;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

        $review = Review::create($validatedData);

        if ($review) {
            return redirect()->route('teacher_review.index')->with('success', 'Review added successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to add review. Please try again.');
        }
    }

    public function show($id)
    {
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

        $updated = $review->update($validatedData);

        if ($updated) {
            return redirect()->route('teacher_review.index')->with('success', 'Review updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update review. Please try again.');
        }
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $deleted = $review->delete();

        if ($deleted) {
            return redirect()->route('teacher_review.index')->with('success', 'Review deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete review. Please try again.');
        }
    }
}
