<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assignment;
use App\Models\Course;

class AssignmentController extends Controller

{
    public function index()
    {
        $assignments = Assignment::with('course')->get();
        $courses = Course::all();
        return view('teacher.assignments.index', compact('assignments','courses'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('teacher.assignments.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|in:Pending,Active,Completed',
        ]);

        Assignment::create($request->all());

        return redirect()->route('teacher.assignments.index')->with('success', 'Assignment created successfully.');
    }

    public function edit(Assignment $assignment)
    {
        $courses = Course::all();
        return view('teacher.assignments.edit', compact('assignment','courses'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|in:Pending,Active,Completed',
        ]);

        $assignment->update($request->all());

        return redirect()->route('teacher.assignments.index')->with('success', 'Assignment updated successfully.');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('teacher.assignments.index')->with('success', 'Assignment deleted successfully.');
    }


}