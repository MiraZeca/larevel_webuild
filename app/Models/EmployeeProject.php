<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeProject extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'project_id', 'currently_working'
    ];
}
