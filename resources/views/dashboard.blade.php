<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h1 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h1>

                    @role('admin')
                        <p>You are logged in as <strong>Admin</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li><a href="{{ route('admin.users') }}" class="text-blue-500 hover:underline">Manage Users</a></li>
                            <li><a href="{{ route('admin.roles') }}" class="text-blue-500 hover:underline">Manage Roles</a></li>
                            <li><a href="{{ route('admin.permissions') }}" class="text-blue-500 hover:underline">Manage Permissions</a></li>
                        </ul>
                    @endrole

                    @role('teacher')
                        <p>You are logged in as <strong>Teacher</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>View class schedules</li>
                            <li>Manage student assignments</li>
                        </ul>
                    @endrole

                    @role('student')
                        <p>You are logged in as <strong>Student</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>View your course list</li>
                            <li>Check your grades</li>
                        </ul>
                    @endrole

                    @role('registrar')
                        <p>You are logged in as <strong>Registrar</strong>.</p>
                        <ul class="mt-2 list-disc list-inside">
                            <li>Approve student registrations</li>
                            <li>Manage academic records</li>
                        </ul>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
