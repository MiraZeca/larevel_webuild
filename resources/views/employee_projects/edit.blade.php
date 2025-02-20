@extends('home')

@section('title')
    Edit Employee-Project Assignment
@endsection

@section('main')
    <div class="container">
        <h1>Edit Employee-Project Assignment</h1>

        <form action="{{ route('employee_projects.update', ['employee' => $employee->id, 'project' => $project->id]) }}" method="POST">
            @csrf
            @method('PUT') <!-- This will tell Laravel to use the update method -->

            <div class="form-group">
                <label for="employee_name">Employee Name</label>
                <input type="text" class="form-control" id="employee_name" value="{{ $employee->first_name }} {{ $employee->last_name }}" disabled>
            </div>

            <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" class="form-control" id="project_name" value="{{ $project->name }}" disabled>
            </div>

            <div class="form-group">
                <label for="currently_working">Currently Working</label>
                <select name="currently_working" class="form-control" required>
                    <option value="1" @if($employeeProject->pivot->currently_working) selected @endif>Currently Working</option>
                    <option value="0" @if(!$employeeProject->pivot->currently_working) selected @endif>Completed</option>
                </select>
            </div><br>

            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
        </form>

    </div><br>
@endsection
