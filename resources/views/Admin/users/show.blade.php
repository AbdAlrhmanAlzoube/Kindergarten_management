@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->first_name }} {{ $user->last_name }}</div>

                <div class="card-body">
                    <!-- User details go here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
