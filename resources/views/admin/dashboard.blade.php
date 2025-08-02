<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Welcome, {{ auth()->user()->name }}!</h3>
                    <p class="mb-4">You are logged in as an <strong>Administrator</strong>.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-800">User Management</h4>
                            <p class="text-red-600">Manage system users and their roles</p>
                            <a href="{{ route('admin.users') }}" class="text-red-700 hover:text-red-900 font-medium">Manage Users →</a>
                        </div>
                        
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800">Role Management</h4>
                            <p class="text-blue-600">Create and manage user roles</p>
                            <a href="{{ route('admin.roles') }}" class="text-blue-700 hover:text-blue-900 font-medium">Manage Roles →</a>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800">Permissions</h4>
                            <p class="text-green-600">Configure system permissions</p>
                            <a href="{{ route('admin.permissions') }}" class="text-green-700 hover:text-green-900 font-medium">Manage Permissions →</a>
                        </div>
                        
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-purple-800">System Reports</h4>
                            <p class="text-purple-600">View system analytics and reports</p>
                        </div>
                        
                        <div class="bg-yellow-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-yellow-800">Settings</h4>
                            <p class="text-yellow-600">Configure system settings</p>
                        </div>
                        
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-indigo-800">Assign Permissions</h4>
                            <p class="text-indigo-600">Assign permissions to roles</p>
                            <a href="{{ route('admin.assign.permissions') }}" class="text-indigo-700 hover:text-indigo-900 font-medium">Assign Permissions →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
