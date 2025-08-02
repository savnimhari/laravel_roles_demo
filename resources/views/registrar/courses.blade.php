<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            <i class="bi bi-journal-bookmark me-2"></i>Course Management
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <!-- Course Management Card -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">All Courses</h3>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addCourseModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Course
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Department</th>
                                    <th>Credits</th>
                                    <th>Instructor</th>
                                    <th>Registered</th>
                                    <th>Capacity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MATH101</td>
                                    <td>Calculus I</td>
                                    <td>Mathematics</td>
                                    <td>4</td>
                                    <td>Dr. Smith</td>
                                    <td>24/30</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#registerStudentsModal">
                                            <i class="bi bi-person-plus"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-warning me-2">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PHYS201</td>
                                    <td>Physics II</td>
                                    <td>Physics</td>
                                    <td>3</td>
                                    <td>Dr. Johnson</td>
                                    <td>18/25</td>
                                    <td>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#registerStudentsModal">
                                            <i class="bi bi-person-plus"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-warning me-2">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Student Registration Section -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Student Registration</h3>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" class="form-control" placeholder="Search students...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        <i class="bi bi-people me-2 text-warning"></i>Available Students
                                    </h5>
                                    <div class="list-group list-group-flush" style="max-height: 400px; overflow-y: auto;">
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>S1001</strong> - John Doe
                                                <div class="text-muted small">Computer Science</div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-success">
                                                <i class="bi bi-plus"></i> Register
                                            </button>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>S1002</strong> - Jane Smith
                                                <div class="text-muted small">Electrical Engineering</div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-success">
                                                <i class="bi bi-plus"></i> Register
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">
                                        <i class="bi bi-journal-check me-2 text-warning"></i>Registered Students (Calculus I)
                                    </h5>
                                    <div class="list-group list-group-flush" style="max-height: 400px; overflow-y: auto;">
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>S1003</strong> - Michael Brown
                                                <div class="text-muted small">Mathematics</div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Remove
                                            </button>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>S1004</strong> - Sarah Johnson
                                                <div class="text-muted small">Physics</div>
                                            </div>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Remove
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Course Modal -->
    <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCourseModalLabel">Add New Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="courseCode" class="form-label">Course Code</label>
                            <input type="text" class="form-control" id="courseCode" placeholder="e.g. MATH101">
                        </div>
                        <div class="mb-3">
                            <label for="courseName" class="form-label">Course Name</label>
                            <input type="text" class="form-control" id="courseName" placeholder="e.g. Calculus I">
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department">
                                    <option selected>Mathematics</option>
                                    <option>Physics</option>
                                    <option>Computer Science</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="credits" class="form-label">Credits</label>
                                <input type="number" class="form-control" id="credits" value="3">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning">Save Course</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Students Modal -->
    <div class="modal fade" id="registerStudentsModal" tabindex="-1" aria-labelledby="registerStudentsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerStudentsModalLabel">Register Students to Calculus I</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="50px"></th>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Program</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td>S1001</td>
                                    <td>John Doe</td>
                                    <td>Computer Science</td>
                                    <td>2nd Year</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="form-check-input"></td>
                                    <td>S1002</td>
                                    <td>Jane Smith</td>
                                    <td>Electrical Engineering</td>
                                    <td>3rd Year</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning">Register Selected Students</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>