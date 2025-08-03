<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            {{ __('Permission Management') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-3">Manage Permissions</h3>
                    <p class="card-text mb-4">Here you can create, edit, and manage system permissions.</p>
                    
                    <div class="alert alert-info">
                        <h4 class="alert-heading">Permission Management Features</h4>
                        <ul class="mb-0 ps-3">
                            <li>Create new permissions</li>
                            <li>Edit existing permissions</li>
                            <li>Delete unused permissions</li>
                            <li>Assign permissions to roles</li>
                        </ul>
                    </div>
                    
                    <div class="mt-4">
                        <h4 class="fw-bold mb-3">Sample Permissions:</h4>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">manage-users</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">manage-roles</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">view-reports</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">edit-content</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">delete-content</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded bg-light">
                                    <span class="fw-bold">approve-registrations</span>
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
</x-app-layout>