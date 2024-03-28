@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Child Details</div>

                <div class="card-body text-center">
                    <!-- Display Child's Image -->
                    <div class="mb-4">
                        <img src="{{ asset($child->user->image) }}" alt="Child Image" style="max-width: 200px;">
                    </div>
                    
                    <!-- Display Child's Information -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">First Name</th>
                                <td>{{ $child->user->first_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Last Name</th>
                                <td>{{ $child->user->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Age</th>
                                <td>{{ $child->age }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Education Stage</th>
                                <td>{{ $child->education_stage }}</td>
                            </tr>
                            <!-- Add more rows to display additional child information -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection















{{-- @extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Child Details</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">First Name</th>
                                <td>{{ $child->user->first_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Age</th>
                                <td>{{ $child->age }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Education Stage</th>
                                <td>{{ $child->education_stage }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
