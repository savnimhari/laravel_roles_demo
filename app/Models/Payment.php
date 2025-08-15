<?php

// app/Models/Payment.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{   //Encapsulation-hides sensitive attributes (like password).
    protected $fillable = [
        'student_id',
        'amount',
        'payment_date',
        'payment_method',
        'description'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
