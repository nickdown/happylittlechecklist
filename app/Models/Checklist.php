<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getTotalTasksAttribute()
    {
        return $this->tasks()->count();
    }

    public function getCompletedTasksAttribute()
    {
        return $this->tasks()->where('completed', "=", 1)->count();
    }
}
