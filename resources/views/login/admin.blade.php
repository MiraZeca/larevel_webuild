@section('title')
    Admin
@endsection

@extends('home')

@section('main')

    <div class="container">
        <h2><a href="{{ route('admin') }}">Confirm Admin</a></h2>
        <button class="addbutton btn">
            <a href="{{ route('users.index') }}">Add Admin / Projectant /Client</a>
        </button>
        <button class="addbutton btn">
            <a href="{{ route('employees.create') }}">Add Employees</a>
        </button>
        <button class="addbutton btn">
            <a href="{{ route('projects.create') }}">Add Projects</a>
        </button>
        <button class="addbutton btn">
            <a href="{{ route('employee_projects.assign') }}">Connect Employees and Projects</a>
        </button>
        <button class="addbutton btn">
            <a href="{{ route('index') }}">Log out</a>
        </button>
    </div>

  
    <hr>
    <section id="contact-list">
        <div class="container mt-5">
            <h2>Contact List</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </section>
    <hr>
    <section id="projects">
        <div class="container mt-5">
            <h1 class="mb-4">Projects</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <hr>
    <section id="employees">
        <div class="container mt-5">
            <h1 class="mb-4">Employees</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Start Date</th>
                        <th>Projects</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->start_date }}</td>
                            <td>
                                @foreach ($employee->projects as $project)
                                    <p>{{ $project->name }} ({{ $project->pivot->currently_working ? 'Currently Working' : 'Completed' }})</p>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <hr>
    <section id="employee_projects">
        <div class="container my-5">
            <h1 class="mb-4">Employees and Their Projects</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Projects</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
   

@endsection
