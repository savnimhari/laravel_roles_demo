<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Manage Roles</h3>
                    <p class="mb-4">Here you can create, edit, and manage user roles in the system.</p>
                    
                    <div class="bg-green-50 dark:bg-green-900 p-4 rounded-lg">
                        <h4 class="font-semibold text-green-800 dark:text-green-200">Role Management Features</h4>
                        <ul class="mt-2 list-disc list-inside text-green-700 dark:text-green-300">
                            <li>Create new roles</li>
                            <li>Edit existing roles</li>
                            <li>Delete unused roles</li>
                            <li>View role permissions</li>
                        </ul>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="font-semibold mb-2">Current Roles:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-red-100 dark:bg-red-800 p-3 rounded">
                                <span class="font-semibold text-red-800 dark:text-red-200">Admin</span>
                            </div>
                            <div class="bg-blue-100 dark:bg-blue-800 p-3 rounded">
                                <span class="font-semibold text-blue-800 dark:text-blue-200">Teacher</span>
                            </div>
                            <div class="bg-yellow-100 dark:bg-yellow-800 p-3 rounded">
                                <span class="font-semibold text-yellow-800 dark:text-yellow-200">Student</span>
                            </div>
                            <div class="bg-purple-100 dark:bg-purple-800 p-3 rounded">
                                <span class="font-semibold text-purple-800 dark:text-purple-200">Registrar</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
