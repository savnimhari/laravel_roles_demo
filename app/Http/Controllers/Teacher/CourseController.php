<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::where('teacher_id', Auth::id())->get();
        return view('teacher.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('teacher.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'schedule' => 'required',
            'students' => 'required|integer|min:0',
        ]);

        Course::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'schedule' => $request->schedule,
            'students' => $request->students,
            'teacher_id' => Auth::id(),
        ]);

        return redirect()->route('teacher.courses.index')->with('success', 'Course added successfully.');
    }

    public function edit(Course $course)
    {
        $this->authorize('update', $course);
        return view('teacher.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $this->authorize('update', $course);

        $request->validate([
            'course_code' => 'required|unique:courses,course_code,' . $course->id,
            'course_name' => 'required',
            'schedule' => 'required',
            'students' => 'required|integer|min:0',
        ]);

        $course->update($request->all());

        return redirect()->route('teacher.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $this->authorize('delete', $course);
        $course->delete();

        return redirect()->route('teacher.courses.index')->with('success', 'Course deleted successfully.');
    }
}
