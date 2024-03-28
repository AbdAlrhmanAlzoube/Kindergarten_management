@extends('Admin.admin_dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">All Courses</h4>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Type</th>
              <th>Description</th>
              <th colspan="3" class="text-center">Options</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($courses as $course)
              <tr>     
                <td>{{ $course->id }}</td>
                <td>{{ $course->type }}</td>
                <td>{{ $course->description }}</td>
                <td>
                  <a href="{{ route('courses.show', $course->id) }}" class="btn btn-secondary btn-rounded btn-fw">Show</a>
                </td>
                <td>
                  <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary btn-rounded btn-fw">Edit</a>
                </td>
                <td>
                  <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-rounded btn-fw">Delete</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5">No Courses found</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
