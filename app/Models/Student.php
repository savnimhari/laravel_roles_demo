<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// all extend Model, so they inherit all Eloquent ORM database features.
class Student extends Model
{


    protected $fillable = ['name', 'email']; // Add other fillable fields
    
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}

