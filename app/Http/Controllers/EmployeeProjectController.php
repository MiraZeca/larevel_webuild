<?php 

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class EmployeeProjectController extends Controller
{
    public function index()
    {
        $employees = Employee::with('projects')->get();
        return view('employee_projects.index', compact('employees'));
    }

    public function assign()
    {
        $employees = Employee::all();
        $projects = Project::all();
        return view('employee_projects.assign', compact('employees', 'projects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'project_id' => 'required|exists:projects,id',
            'currently_working' => 'required|boolean',
        ]);

        $employee = Employee::find($data['employee_id']);
        $employee->projects()->attach($data['project_id'], ['currently_working' => $data['currently_working']]);

        return redirect()->route('employee_projects.index')->with('success', 'Employee assigned to project successfully.');
    }

    public function edit($employeeId, $projectId)
    {
        $employee = Employee::findOrFail($employeeId);
        $project = Project::findOrFail($projectId);
        $employeeProject = $employee->projects()->where('project_id', $projectId)->first();

        return view('employee_projects.edit', compact('employee', 'project', 'employeeProject'));
    }

    public function update(Request $request, $employeeId, $projectId)
    {
        $data = $request->validate([
            'currently_working' => 'required|boolean',
        ]);

        $employee = Employee::findOrFail($employeeId);
        $project = Project::findOrFail($projectId);

        // Update the pivot table
        $employee->projects()->updateExistingPivot($projectId, ['currently_working' => $data['currently_working']]);

        return redirect()->route('employee_projects.index')->with('success', 'Employee-Project relationship updated successfully!');
    }

    public function destroy($employeeId, $projectId)
{
    $employee = Employee::findOrFail($employeeId);
    $project = Project::findOrFail($projectId);

    // Brisanje odnosa između zaposlenog i projekta
    $employee->projects()->detach($projectId);

    return redirect()->route('employee_projects.index')->with('success', 'Employee-project relationship deleted successfully!');
}

}
