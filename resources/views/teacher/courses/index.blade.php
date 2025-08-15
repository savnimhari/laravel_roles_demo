<x-app-layout>
<div class="container py-5">
    <h3>My Courses</h3>
    <a href="{{ route('teacher.courses.create') }}" class="btn btn-success mb-3">+ Add Course</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Schedule</th>
                <th>Students</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->schedule }}</td>
                <td>{{ $course->students }}</td>
                <td>
                    <a href="{{ route('teacher.courses.edit', $course) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('teacher.courses.destroy', $course) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
