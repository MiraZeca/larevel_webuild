<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;

class ClientController extends Controller
{
    public function index() {
        // Dohvati sve projekte i zaposlene
        $projects = Project::all();
        $employees = Employee::all();

        // Prosledi podatke u view
        return view('login.client', compact('projects', 'employees'));
    }
}
