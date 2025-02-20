<?php

namespace App\Http\Controllers;

use App\Models\Employee;     
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

class EmployeeController extends Controller
{
    public function index()
    {
        // Dohvatanje svih zaposlenih bez filtera
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Validacija podataka pomoću Validator fasade
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
        ]);

        // Provera validacije
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Kreiraj instancu Employee modela i popuni je podacima
        $employee = new Employee($request->all());

        // Sačuvaj zaposlenog
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Edit metoda koja prikazuje podatke zaposlenog
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
     
        return view('employees.edit', compact('employee'));
    }

    // Update metoda koja ažurira podatke o zaposlenom
    public function update(Request $request, $id)
    {
        // Validacija unosa
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
        ]);

        $employee = Employee::findOrFail($id);  // Pronađi zaposlenog po ID-u

        // Ažuriraj podatke
        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
}

}

