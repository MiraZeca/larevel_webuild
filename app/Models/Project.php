<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class)->withPivot('currently_working')->withTimestamps();
    }
}
