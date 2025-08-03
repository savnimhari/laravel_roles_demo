<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4" style="background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);">
        <div class="container">
            <!-- Welcome Card -->
            <div class="card border-0 shadow mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-6 mb-1">Welcome, {{ auth()->user()->name }}!</h1>
                            <p class="text-muted mb-0">You are logged in as a <span class="badge bg-primary">{{ auth()->user()->roles->first()->name ?? 'User' }}</span></p>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                            <i class="bi bi-person-check fs-3 text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Sections -->
            <div class="row g-4">
                @role('admin')
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-gear fs-3 text-primary"></i>
                                </div>
                                <h3 class="mb-0">Admin Panel</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('admin.users') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-primary me-3"></span>
                                        <span>Manage Users</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('admin.roles') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-primary me-3"></span>
                                        <span>Manage Roles</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('admin.permissions') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-primary me-3"></span>
                                        <span>Manage Permissions</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endrole

                @role('teacher')
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-success bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-journal-bookmark fs-3 text-success"></i>
                                </div>
                                <h3 class="mb-0">Teacher Panel</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('teacher.courses') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-success me-3"></span>
                                        <span>My Courses</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('teacher.assignments') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-success me-3"></span>
                                        <span>Manage Assignments</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('teacher.grades') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-success me-3"></span>
                                        <span>Submit Grades</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endrole

                @role('registrar')
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-warning bg-opacity-10 p-3 rounded">
                                    <i class="bi bi-clipboard-data fs-3 text-warning"></i>
                                </div>
                                <h3 class="mb-0">Registrar Panel</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('registrar.students') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-warning me-3"></span>
                                        <span>Student Records</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('registrar.courses') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-warning me-3"></span>
                                        <span>Course Management</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <a href="{{ route('registrar.reports') }}" class="text-decoration-none d-flex align-items-center">
                                        <span class="bullet bg-warning me-3"></span>
                                        <span>Generate Reports</span>
                                        <i class="bi bi-chevron-right ms-auto"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endrole

                @role('student')
                <div class="col-12">
                    <div class="card border-0 shadow-sm hover-effect">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <div class="bg-purple bg-opacity-10 rounded-circle p-3 d-inline-flex mb-3">
                                    <i class="bi bi-journal-bookmark fs-3 text-purple"></i>
                                </div>
                                <h2 class="mb-2">Student Dashboard</h2>
                                <p class="text-muted">Manage your academic activities</p>
                            </div>
                            
                            <div class="row g-4">
                                <!-- Course List -->
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm h-100">
                                        <div class="card-body text-center d-flex flex-column">
                                            <div class="bg-purple bg-opacity-10 rounded-circle p-3 d-inline-flex mx-auto mb-3">
                                                <i class="bi bi-book fs-3 text-purple"></i>
                                            </div>
                                            <h4 class="mb-2">Course List</h4>
                                            <p class="text-muted mb-3 flex-grow-1">View all your enrolled courses</p>
                                            <a href="{{ route('payments.detail') }}" class="btn btn-purple w-100">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Check Grades -->
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm h-100">
                                        <div class="card-body text-center d-flex flex-column">
                                            <div class="bg-purple bg-opacity-10 rounded-circle p-3 d-inline-flex mx-auto mb-3">
                                                <i class="bi bi-award fs-3 text-purple"></i>
                                            </div>
                                            <h4 class="mb-2">Grades</h4>
                                            <p class="text-muted mb-3 flex-grow-1">Check your academic performance</p>
                                            <a href="{{ route('payments.create') }}" class="btn btn-purple w-100">View Grades</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- View Payments -->
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm h-100">
                                        <div class="card-body text-center d-flex flex-column">
                                            <div class="bg-purple bg-opacity-10 rounded-circle p-3 d-inline-flex mx-auto mb-3">
                                                <i class="bi bi-credit-card fs-3 text-purple"></i>
                                            </div>
                                            <h4 class="mb-2">Payments</h4>
                                            <p class="text-muted mb-3 flex-grow-1">View and manage payments</p>
                                            <a href="{{ route('payments.index') }}" class="btn btn-purple w-100">View Payments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endrole
            </div>
        </div>
    </div>

    <style>
        .hover-effect:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .bg-purple {
            background-color: #6f42c1;
        }
        .text-purple {
            color: #6f42c1;
        }
        .btn-purple {
            background-color: #6f42c1;
            color: white;
        }
        .btn-purple:hover {
            background-color: #5e32b0;
            color: white;
        }
        .bullet {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }
    </style>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} SL Academy. All rights reserved.</p>
            <p class="mb-0">Powered by Laravel</p>
        </div>
    </footer>
</x-app-layout>