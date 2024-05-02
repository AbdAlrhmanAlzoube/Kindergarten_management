@extends('Dashboard.Forebear.dashboard')

@section('forebear_content')
<div class="container">
    <h1>Children</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Education Stage</th>
                <th>Forebear</th>

                <th>Level</th> <!-- New "Level" column -->
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($children as $child)
                <tr>
                    <td>{{ $child->id }}</td>
                    <td>
                        {{ $child->user->first_name ?? 'Unknown' }} {{ $child->user->last_name ?? 'Unknown' }}
                    </td>
                    <td>{{ $child->age }}</td>
                    <td>{{ $child->education_stage }}</td>
                    <td>
                        @if($child->forebear && $child->forebear->user)
                            {{ $child->forebear->user->first_name ?? 'Unknown' }} {{ $child->forebear->user->last_name ?? 'Unknown' }}
                        @else
                            'Unknown'
                        @endif
                    </td>
                    <td>
                    {{ $child->reviews->first()?->level ?? 'Unknown' }}
                    </td>
                </td>
                    <td>
                        <!-- Action buttons -->
                        <a href="{{ route('forebear_child.show', ['forebear_child' => $child->id]) }}" class="btn btn-info" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('forebear_child.edit', ['forebear_child' => $child->id]) }}" class="btn btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('forebear_child.destroy', ['forebear_child' => $child->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this child?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
