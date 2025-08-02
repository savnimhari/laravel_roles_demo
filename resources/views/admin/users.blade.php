<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-3">Manage Users</h3>
                    <p class="card-text mb-4">Here you can manage all system users and their roles.</p>
                    
                    <div class="alert alert-primary">
                        <h4 class="alert-heading">User Management Features</h4>
                        <ul class="mb-0 ps-3">
                            <li>View all registered users</li>
                            <li>Edit user information</li>
                            <li>Assign/remove roles from users</li>
                            <li>Activate/deactivate user accounts</li>
                        </ul>
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