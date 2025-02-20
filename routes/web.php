<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectantController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('users.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/login/admin', [AdminController::class, 'index'])->name('admin'); 
Route::get('/login/client', [ClientController::class, 'index'])->name('client');
Route::get('/login/projectant', [ProjectantController::class, 'index'])->name('projectant'); 

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/info', [ContactController::class, 'info'])->name('contact.info');
Route::post('/contact/{id}/answered', [ContactController::class, 'markAsAnswered'])->name('contact.answered');

Route::resource('employees', EmployeeController::class);
Route::resource('projects', ProjectController::class);

Route::get('employee_projects/assign', [EmployeeProjectController::class, 'assign'])->name('employee_projects.assign');
Route::post('employee_projects', [EmployeeProjectController::class, 'store'])->name('employee_projects.store');
Route::get('employee_projects', [EmployeeProjectController::class, 'index'])->name('employee_projects.index');
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/employee-projects/{employee}/{project}/edit', [EmployeeProjectController::class, 'edit'])->name('employee_projects.edit');
Route::put('/employee-projects/{employee}/{project}', [EmployeeProjectController::class, 'update'])->name('employee_projects.update');
Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::delete('employee_projects/{employee}/{project}', [EmployeeProjectController::class, 'destroy'])->name('employee_projects.destroy');






