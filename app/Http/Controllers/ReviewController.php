<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Child;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\ChildStoreRequest;

class ReviewController extends Controller
{
   
    public function index()
    {
        $reviews = Review::all();
        return view('Admin.reviews.index', compact('reviews'));
    }

    public function show(Review $review)
    {
        return view('Admin.reviews.show', compact('review'));
    }
    }
    


