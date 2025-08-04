<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    public function studentRecords()
    {
        return view('registrar.students');
    }

    public function courseManagement()
    {
        return view('registrar.courses');
    }

    public function generateReports()
    {
        return view('registrar.reports');
    }
}
