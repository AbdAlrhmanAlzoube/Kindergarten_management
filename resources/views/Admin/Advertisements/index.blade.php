@extends('Admin.admin_dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Advertisements</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($advertisements as $advertisement)
                                    <tr>
                                        <td>{{ $advertisement->title }}</td>
                                        <td>{{ $advertisement->description }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $advertisement->image) }}" alt="Advertisement Image" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $advertisement->start_date }}</td>
                                        <td>{{ $advertisement->end_date }}</td>
                                        <td>{{ $advertisement->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('advertisements.show', $advertisement->id) }}" class="btn btn-primary">View</a>
                                            <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('advertisements.destroy', $advertisement->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection
