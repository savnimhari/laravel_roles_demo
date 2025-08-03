<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            <i class="bi bi-journal-bookmark me-2"></i>My Courses
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Assigned Courses</h3>
                        <a href="#" class="btn btn-success">
                            <i class="bi bi-plus-circle me-2"></i>Add Course
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Schedule</th>
                                    <th>Students</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MATH101</td>
                                    <td>Calculus I</td>
                                    <td>Mon/Wed 9:00-10:30</td>
                                    <td>24</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-success">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PHYS201</td>
                                    <td>Physics II</td>
                                    <td>Tue/Thu 11:00-12:30</td>
                                    <td>18</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-success">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>