<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectantController extends Controller
{
    public function index() {
        return view('login.projectant');
    }
}
