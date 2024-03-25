@extends('Admin.admin_dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Child</div>

                <div class="card-body">
                    <form action="{{ route('users.children.store', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="user_first_name">First Name</label>
                            <input type="text" class="form-control @error('user_first_name') is-invalid @enderror" id="user_first_name" name="user_first_name" placeholder="Enter first name">
                            @error('user_first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" placeholder="Enter age">
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="education_stage">Education Stage</label>
                            <select class="form-control @error('education_stage') is-invalid @enderror" id="education_stage" name="education_stage">
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="High School">High School</option>
                            </select>
                            @error('education_stage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
