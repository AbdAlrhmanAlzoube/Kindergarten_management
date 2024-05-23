@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forebears Table</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($forebears as $forebear)
                                <tr>
                                    <td>{{ $forebear->id }}</td>
                                    <td>{{ $forebear->user_id }}</td>
                                    <td>{{ $forebear->age }}</td>
                                    <td>
                                        <a href="{{ route('forebears.show', $forebear->id) }}" class="btn btn-primary btn-sm">Show</a>
                                        <a href="{{ route('forebears.edit', $forebear->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('forebears.destroy', $forebear->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this forebear?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
