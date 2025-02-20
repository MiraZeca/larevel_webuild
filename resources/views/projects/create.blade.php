@section('title')
    Projects - create
@endsection

@extends('home')

@section('main')

    <div class="container">
        <h1 class="mb-4">Create Project</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Project Status</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
        </form>
    </div><br>
@endsection
