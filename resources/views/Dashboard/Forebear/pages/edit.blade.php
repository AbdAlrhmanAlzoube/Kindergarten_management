@extends('Dashboard.Forebear.dashboard')

@section('forebear_content')
<div class="container">
    <h1>Edit Child</h1>
    <form action="{{ route('forebear_child.update',  ['forebear_child' => $child->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <!-- Age -->
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $child->age }}" min="3" max="5" required>
        </div>

        <!-- Education Stage -->
        <div class="form-group">
            <label for="education_stage">Education Stage</label>
            <select name="education_stage" id="education_stage" class="form-control" required>
                <option value="kg1">KG1</option>
                <option value="kg2">KG2</option>
                <option value="kg3">KG3</option>
                {{-- <option value="primary">Primary</option>
                <option value="middle">Middle</option>
                <option value="high">High</option> --}}
            </select>
        </div>

        <!-- Image Upload -->
        <div class="form-group">
            <label for="image">Change Profile Image (Optional)</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Child</button>
        </div>
    </form>
</div>
@endsection
