<x-app-layout>
<div class="container py-5">
    <h3>Edit Course</h3>
    <form action="{{ route('teacher.courses.update', $course) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Course Code</label>
            <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}" required>
        </div>
        <div class="mb-3">
            <label>Course Name</label>
            <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}" required>
        </div>
        <div class="mb-3">
            <label>Schedule</label>
            <input type="text" name="schedule" class="form-control" value="{{ $course->schedule }}" required>
        </div>
        <div class="mb-3">
            <label>Students</label>
            <input type="number" name="students" class="form-control" value="{{ $course->students }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</x-app-layout>
