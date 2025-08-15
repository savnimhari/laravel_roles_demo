<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
  
    protected $fillable = [
        'course_id', 'title', 'description', 'due_date', 'status'
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}


