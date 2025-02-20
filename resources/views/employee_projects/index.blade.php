@section('title')
Employees vs Projects
@endsection

@extends('home')

@section('main')
    <div class="container">
        <h1 class="mb-4">Employees and Their Projects</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Position</th>
                    <th>Projects</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            @foreach ($employee->projects as $project)
                                <p>{{ $project->name }} ({{ $project->pivot->currently_working ? 'Currently Working' : 'Completed' }})</p>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('employee_projects.edit', ['employee' => $employee->id, 'project' => $project->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('employee_projects.destroy', ['employee' => $employee->id, 'project' => $project->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee-project relationship?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
    </div><br>
@endsection
