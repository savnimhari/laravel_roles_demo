<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-bold text-dark mb-0">
            {{ __('Role Management') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">Role Management</h1>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">
                            Create New Role
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Role Name</th>
                                    <th scope="col">Permissions</th>
                                    <th scope="col" class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @forelse ($role->permissions as $permission)
                                                <span class="badge bg-info text-dark me-1">{{ $permission->name }}</span>
                                            @empty
                                                <span class="text-muted fst-italic">No permissions assigned</span>
                                            @endforelse
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this role? This action cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center text-muted">No roles found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
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