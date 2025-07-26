<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Permission Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Manage Permissions</h3>
                    <p class="mb-4">Here you can create, edit, and manage system permissions.</p>
                    
                    <div class="bg-indigo-50 dark:bg-indigo-900 p-4 rounded-lg">
                        <h4 class="font-semibold text-indigo-800 dark:text-indigo-200">Permission Management Features</h4>
                        <ul class="mt-2 list-disc list-inside text-indigo-700 dark:text-indigo-300">
                            <li>Create new permissions</li>
                            <li>Edit existing permissions</li>
                            <li>Delete unused permissions</li>
                            <li>Assign permissions to roles</li>
                        </ul>
                    </div>
                    
                    <div class="mt-6">
                        <h4 class="font-semibold mb-2">Sample Permissions:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">manage-users</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">manage-roles</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">view-reports</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">edit-content</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">delete-content</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded">
                                <span class="font-semibold">approve-registrations</span>
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
