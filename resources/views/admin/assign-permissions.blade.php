<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Assign Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Assign Permissions to Roles</h3>
                    <p class="mb-4">Here you can assign specific permissions to different roles.</p>
                    
                    <div class="bg-yellow-50 dark:bg-yellow-900 p-4 rounded-lg">
                        <h4 class="font-semibold text-yellow-800 dark:text-yellow-200">Permission Assignment Features</h4>
                        <ul class="mt-2 list-disc list-inside text-yellow-700 dark:text-yellow-300">
                            <li>Assign permissions to roles</li>
                            <li>Remove permissions from roles</li>
                            <li>View current role-permission mappings</li>
                            <li>Bulk permission assignment</li>
                        </ul>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="font-semibold mb-2">Role-Permission Matrix:</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-600">
                                        <th class="px-4 py-2 border border-gray-300 dark:border-gray-500">Role</th>
                                        <th class="px-4 py-2 border border-gray-300 dark:border-gray-500">Permissions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500 font-semibold">Admin</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500">All permissions</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500 font-semibold">Teacher</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500">edit-content, view-reports</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500 font-semibold">Student</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500">view-content</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500 font-semibold">Registrar</td>
                                        <td class="px-4 py-2 border border-gray-300 dark:border-gray-500">approve-registrations, view-reports</td>
                                    </tr>
                                </tbody>
                            </table>
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
