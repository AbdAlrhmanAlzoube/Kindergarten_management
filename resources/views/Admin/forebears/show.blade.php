@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #337ab7; color: white; font-size: 1.25rem;">Forebear Details</div>


                <div class="card-body">
                    <p><strong>ID:</strong> {{ $forebear->id }}</p>
                    <p><strong>User ID:</strong> {{ $forebear->user_id }}</p>
                    <p><strong>Age:</strong> {{ $forebear->age }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
