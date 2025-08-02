<?php

namespace App\Http\Controllers\Registrar;



use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Services\RegistrationService;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    protected $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    public function index()
    {
        $courses = Course::withCount('students')->paginate(10);
        return view('registrar.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $students = $course->students()->paginate(10);
        $availableStudents = User::role('student')
                                ->whereDoesntHave('courses', function($q) use ($course) {
                                    $q->where('course_id', $course->id);
                                })
                                ->paginate(10);
        
        return view('registrar.courses.show', compact('course', 'students', 'availableStudents'));
    }

    public function register(Request $request, Course $course)
    {
        $request->validate([
            'student_id' => 'required|exists:users,id'
        ]);

        try {
            $student = User::findOrFail($request->student_id);
            $this->registrationService->registerStudent($student, $course);
            
            return back()->with('success', 'Student registered successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function bulkRegister(Request $request, Course $course)
    {
        $request->validate([
            'student_ids' => 'required|array',
            'student_ids.*' => 'exists:users,id'
        ]);

        $results = $this->registrationService->bulkRegisterStudents($request->student_ids, $course);
        
        return back()->with('results', $results);
    }

    public function unregister(Course $course, User $student)
    {
        $course->students()->detach($student->id);
        return back()->with('success', 'Student unregistered successfully');
    }
}
