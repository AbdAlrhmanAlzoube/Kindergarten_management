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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->child->name }}</td>
                                    <td>{{ $review->teacher->name }}</td>
                                    <td>{{ $review->course->name }}</td>
                                    <td>{{ $review->level }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
