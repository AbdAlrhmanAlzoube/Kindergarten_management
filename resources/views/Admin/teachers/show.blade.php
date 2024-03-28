
@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Teacher Details</div>

            <div class="card-body text-center">
                <!-- Display Teacher's Image -->
                <div class="mb-4">
                    <img src="{{ asset($teacher->user->image) }}" alt="Teacher Image" style="max-width: 200px;">
                </div>

                <!-- Display Teacher's Information -->
                <p><strong>First Name:</strong> {{ $teacher->user->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $teacher->user->last_name }}</p>
                <p><strong>Address:</strong> {{ $teacher->user->address }}</p>
                <p><strong>Phone:</strong> {{ $teacher->user->phone }}</p>
                <p><strong>Email:</strong> {{ $teacher->user->email }}</p>
                <p><strong>Gender:</strong> {{ $teacher->user->gender }}</p>
                <p><strong>Experience Years:</strong> {{ $teacher->experience_years }}</p>
                <p><strong>Course Name:</strong> {{ $teacher->course_name }}</p>
                <p><strong>Age:</strong> {{ $teacher->age }}</p>
            </div>
        </div>
    </div>
@endsection







{{-- @extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Teacher Details</div>

            <div class="card-body">
                <p><strong>First Name:</strong> {{ $teacher->user->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $teacher->user->last_name }}</p>
                <p><strong>Address:</strong> {{ $teacher->user->address }}</p>
                <p><strong>Phone:</strong> {{ $teacher->user->phone }}</p>
                <p><strong>Email:</strong> {{ $teacher->user->email }}</p>
                <p><strong>Gender:</strong> {{ $teacher->user->gender }}</p>
                <p><strong>Experience Years:</strong> {{ $teacher->experience_years }}</p>
                <p><strong>Course Name:</strong> {{ $teacher->course_name }}</p>
                <p><strong>Age:</strong> {{ $teacher->age }}</p>
            </div>
        </div>
    </div>
@endsection --}}
