@extends('Admin.admin_dashboard')

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
                                <td>{{ $child->user_first_name }}</td>
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
@endsection
