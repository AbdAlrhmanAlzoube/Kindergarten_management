@extends('Dashboard.Forebear.dashboard')

@section('forebear_content')
<div class="container">
    <h1>Edit Child</h1>
    <form action="{{ route('forebear_child.update', ['forebear_child' => $child->id]) }}" method="POST" enctype="multipart/form-data">
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

        <!-- User -->
        <div class="form-group">
            <label for="user_id">User</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach ($users as $user)
                <option value="{{ $user->id }}" {{ $child->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->first_name }}  {{ $user->list_name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Forebear -->
        <div class="form-group">
            <label for="forebear_id">Forebear</label>
            <select name="forebear_id" id="forebear_id" class="form-control" required>
                @foreach ($forebears as $forebear)
                <option value="{{ $forebear->id }}" {{ $child->forebear_id == $forebear->id ? 'selected' : '' }}>
                    {{ $forebear->user->first_name }}   {{ $forebear->user->list_name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Age -->
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $child->age }}" min="0" required>
        </div>

        <!-- Education Stage -->
        <div class="form-group">
            <label for="education_stage">Education Stage</label>
            <select name="education_stage" id="education_stage" class="form-control" required>
                <option value="kg1" {{ $child->education_stage == 'kg1' ? 'selected' : '' }}>KG1</option>
                <option value="kg2" {{ $child->education_stage == 'kg2' ? 'selected' : '' }}>KG2</option>
                <option value="kg3" {{ $child->education_stage == 'kg3' ? 'selected' : '' }}>KG3</option>
                {{-- Add more options if needed --}}
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
