@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $user->first_name }} {{ $user->last_name }}
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>ID:</strong> {{ $user->id }}</li>
                        <li class="list-group-item"><strong>First Name:</strong> {{ $user->first_name }}</li>
                        <li class="list-group-item"><strong>Last Name:</strong> {{ $user->last_name }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $user->address }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $user->phone }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Type:</strong> {{ $user->type }}</li>
                        <li class="list-group-item"><strong>Gender:</strong> {{ $user->gender }}</li>
                        <li class="list-group-item"><strong>Image:</strong> <img src="{{ asset('storage/'.$user->image) }}" alt="{{ $user->first_name }} {{ $user->last_name }}" width="100px" height="100px"></li>
                        <!-- Add more details as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
