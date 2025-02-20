<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'address', 'phone', 'email', 'position', 'start_date'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('currently_working')->withTimestamps();
    }
}
