<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Manage Users</h3>
                    <p class="mb-4">Here you can manage all system users and their roles.</p>
                    
                    <div class="bg-blue-50 dark:bg-blue-900 p-4 rounded-lg">
                        <h4 class="font-semibold text-blue-800 dark:text-blue-200">User Management Features</h4>
                        <ul class="mt-2 list-disc list-inside text-blue-700 dark:text-blue-300">
                            <li>View all registered users</li>
                            <li>Edit user information</li>
                            <li>Assign/remove roles from users</li>
                            <li>Activate/deactivate user accounts</li>
                        </ul>
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
