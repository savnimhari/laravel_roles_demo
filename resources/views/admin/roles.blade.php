<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            {{ __('Role Management') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-3">Manage Roles</h3>
                    <p class="card-text mb-4">Here you can create, edit, and manage user roles in the system.</p>
                    
                    <div class="alert alert-success">
                        <h4 class="alert-heading">Role Management Features</h4>
                        <ul class="mb-0 ps-3">
                            <li>Create new roles</li>
                            <li>Edit existing roles</li>
                            <li>Delete unused roles</li>
                            <li>View role permissions</li>
                        </ul>
                    </div>
                    
                    <div class="mt-4">
                        <h4 class="fw-bold mb-3">Current Roles:</h4>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <div class="p-3 rounded bg-danger bg-opacity-10">
                                    <span class="fw-bold text-danger">Admin</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="p-3 rounded bg-primary bg-opacity-10">
                                    <span class="fw-bold text-primary">Teacher</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="p-3 rounded bg-warning bg-opacity-10">
                                    <span class="fw-bold text-warning">Student</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="p-3 rounded bg-purple bg-opacity-10">
                                    <span class="fw-bold text-light">Registrar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-purple {
            background-color: #6f42c1;
        }
        .text-purple {
            color: #6f42c1;
        }
        .bg-purple-opacity-10 {
            background-color: rgba(111, 66, 193, 0.1);
        }
    </style>
</x-app-layout>