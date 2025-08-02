<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            <i class="bi bi-file-earmark-text me-2"></i>Manage Assignments
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="mb-0">Course Assignments</h3>
                        <div>
                            <select class="form-select me-2" style="width: 200px; display: inline-block;">
                                <option>Select Course</option>
                                <option>Calculus I</option>
                                <option>Physics II</option>
                            </select>
                            <a href="#" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i>New Assignment
                            </a>
                        </div>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Derivatives Practice</h5>
                                <small class="text-muted">Due: Oct 15, 2023</small>
                            </div>
                            <p class="mb-1">Calculus I - 24 submissions received</p>
                            <div class="mt-2">
                                <span class="badge bg-primary me-2">Active</span>
                                <small class="text-muted">Created: Sep 30, 2023</small>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Kinematics Problems</h5>
                                <small class="text-muted">Due: Oct 20, 2023</small>
                            </div>
                            <p class="mb-1">Physics II - 18/24 submissions received</p>
                            <div class="mt-2">
                                <span class="badge bg-warning text-dark me-2">Pending</span>
                                <small class="text-muted">Created: Oct 5, 2023</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>