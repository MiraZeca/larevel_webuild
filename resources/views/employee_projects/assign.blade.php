@section('title')
Employees vs Projects ass
@endsection

@extends('home')

@section('main')
    <div class="container">
        <h1 class="mb-4">Assign Employee to Project</h1>
        <form action="{{ route('employee_projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee</label>
                <select class="form-control" id="employee_id" name="employee_id" required>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="project_id" class="form-label">Project</label>
                <select class="form-control" id="project_id" name="project_id" required>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="currently_working" class="form-label">Currently Working</label>
                <select class="form-control" id="currently_working" name="currently_working" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Assign</button>
            <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
        </form>
    </div> <br>
@endsection
