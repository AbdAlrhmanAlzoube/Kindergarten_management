@extends('Admin.admin_dashboard')

@section('content')
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->child->user->first_name }}</td>
                                    <td>{{ $review->teacher->user->first_name }}</td>
                                    <td>{{ $review->course->type }}</td>
                                    <td>{{ $review->level }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Review Actions">
                                            <a href="{{ route('reviews.show', $review) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('reviews.edit', $review) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this review?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
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
