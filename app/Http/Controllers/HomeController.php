<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Dohvatanje svih podataka
        $projects = Project::all();
        $employees = Employee::all();
        $contacts = Contact::all(); // Dohvatiti sve kontakte

        // Prosleđivanje promenljivih u view
        return view('index', compact('projects', 'employees', 'contacts'));
    }
}
