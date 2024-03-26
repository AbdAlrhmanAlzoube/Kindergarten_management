@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Teachers List</div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teacher->user->first_name }}</td>
                                <td>{{ $teacher->user->last_name }}</td>
                                <td>{{ $teacher->user->email }}</td>
                                <td>
                                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
