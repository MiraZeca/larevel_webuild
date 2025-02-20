@extends('home')

@section('title')
    Edit Project
@endsection

@section('main')
    <div class="container">
        <h1>Edit Project</h1>
        
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- This ensures the update method is used for the form submission -->

            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $project->name) }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="In Progress" @if($project->status == 'In Progress') selected @endif>In Progress</option>
                    <option value="Completed" @if($project->status == 'Completed') selected @endif>Completed</option>
                    <option value="On Hold" @if($project->status == 'On Hold') selected @endif>On Hold</option>
                </select>
            </div><br>

            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
        </form>

    </div> <br>
@endsection
