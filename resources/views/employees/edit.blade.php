@extends('home')

@section('title')
    Edit Employee
@endsection

@section('main')
    <div class="container">
        <h1>Edit Employee</h1>
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')  <!-- Ovaj metod omogućava PUT zahtev za ažuriranje -->
            
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" value="{{ old('first_name', $employee->first_name) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" value="{{ old('last_name', $employee->last_name) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ old('address', $employee->address) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" value="{{ old('position', $employee->position) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" value="{{ old('start_date', $employee->start_date) }}" class="form-control" required>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a class="btn btn-primary" href="{{ route('admin') }}">Back  to Admin</a>
        </form>
    </div> <br>
@endsection
