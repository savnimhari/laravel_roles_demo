<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{


    protected $fillable = ['name', 'email']; // Add other fillable fields
    
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}

