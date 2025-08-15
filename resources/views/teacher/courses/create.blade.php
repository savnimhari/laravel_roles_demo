<x-app-layout>
    <div class="container py-5">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white py-3">
                <h3 class="mb-0">
                    <i class="bi bi-journal-plus me-2"></i> Add New Course
                </h3>
                <p class="mb-0 small text-white-50">Fill out the details to add a new course</p>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('teacher.courses.store') }}" method="POST">
                    @csrf
                    
                    <!-- Course Code -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course Code</label>
                        <input type="text" name="course_code" class="form-control form-control-lg" placeholder="e.g. CS101" required>
                    </div>

                    <!-- Course Name -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course Name</label>
                        <input type="text" name="course_name" class="form-control form-control-lg" placeholder="e.g. Introduction to Programming" required>
                    </div>

                    <!-- Schedule -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Schedule</label>
                        <input type="text" name="schedule" class="form-control form-control-lg" placeholder="e.g. Mon & Wed 10:00 - 12:00" required>
                    </div>

                    <!-- Students -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Number of Students</label>
                        <input type="number" name="students" class="form-control form-control-lg" value="0" min="0" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-success btn-lg px-4">
                            <i class="bi bi-save me-2"></i> Save Course
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
