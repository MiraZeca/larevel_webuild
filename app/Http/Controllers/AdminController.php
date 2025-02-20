<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        // Dohvatanje svih zaposlenih bez filtera
        $projects = Project::all();
        $employees = Employee::all();
        $contacts = Contact::all();

        return view('login.admin', compact('projects', 'employees','contacts'));

    }
    
} 
