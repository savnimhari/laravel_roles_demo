<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function myCourses()
    {
        // You can pass data to the view if needed
        return view('teacher.courses');
    }

    public function manageAssignments()
    {
        return view('teacher.assignments');
    }

    public function submitGrades()
    {
        return view('teacher.grades');
    }
}

