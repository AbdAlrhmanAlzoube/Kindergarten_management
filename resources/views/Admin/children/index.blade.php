@extends('Admin.admin_dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Children Table</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Age</th>
              <th>Education Stage</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($children as $child)
              <tr>
                <td>{{ $child->id }}</td>
                <td>{{ $child->user->first_name }}</td>
                <td>{{ $child->age }}</td>
                <td>{{ $child->education_stage }}</td>
                <td>
                  <a href="{{ route('children.show', [ $child->id]) }}" class="btn btn-secondary btn-rounded btn-fw">Show</a>
                </td>
                <td>
                  <form action="{{ route('children.destroy', [ $child->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5">No Children found</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
