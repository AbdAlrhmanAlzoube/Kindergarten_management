@extends('Dashboard.Teacher.dashboard')

@section('teacher_content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">All Reviews</h1>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Child</th>
                                <th>Teacher</th>
                                <th>Course</th>
                                <th>Level</th>
                                <th>Action</th> <!-- New Column for Actions -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->child->user->first_name }}</td>
                                    <td>{{ $review->teacher->user->first_name }}</td>
                                    <td>{{$review->course->type }}</td>

                                    <td>{{ $review->level }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Review Actions">
                                            <a href="{{ route('teacher_review.show', $review) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('teacher_review.edit', $review) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <!-- You can add more actions here -->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
