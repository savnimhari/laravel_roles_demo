<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100 light:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white info:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-8">
                
                <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 dark:text-white">
                    Welcome, {{ Auth::user()->name }}!
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

                    @role('admin')
                    <div class="p-6 bg-blue-100 dark:bg-blue-900 rounded-xl shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-blue-800 dark:text-white mb-2 flex items-center gap-2">
                            🛠️ Admin Panel
                        </h2>
                        <ul class="list-disc list-inside text-blue-700 dark:text-blue-200 space-y-1">
                            <li><a href="{{ route('admin.users') }}" class="hover:underline">Manage Users</a></li>
                            <li><a href="{{ route('admin.roles') }}" class="hover:underline">Manage Roles</a></li>
                            <li><a href="{{ route('admin.permissions') }}" class="hover:underline">Manage Permissions</a></li>
                        </ul>
                    </div>
                    @endrole

                    @role('teacher')
                    <div class="p-6 bg-green-100 dark:bg-green-900 rounded-xl shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-green-800 dark:text-white mb-2 flex items-center gap-2">
                            📚 Teacher Panel
                        </h2>
                        <ul class="list-disc list-inside text-green-700 dark:text-green-200 space-y-1">
                            <li>View class schedules</li>
                            <li>Manage student assignments</li>
                        </ul>
                    </div>
                    @endrole

                    @role('student')
<div class="p-6 bg-purple-100 dark:bg-purple-900 rounded-xl shadow hover:shadow-lg transition">
    <h2 class="text-2xl font-bold text-purple-800 dark:text-white mb-6 text-center">
        🎓 Student Dashboard
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Course List -->
        <div class="bg-white dark:bg-purple-800 rounded-lg p-6 shadow-md hover:shadow-xl transition text-center h-40 flex flex-col justify-between">
            <div class="text-lg font-semibold text-purple-700 dark:text-white">📚 View your course list</div>
            <a href="{{ route('courses.detail') }}" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">View</a>
        </div>

        <!-- Check Grades -->
        <div class="bg-white dark:bg-purple-800 rounded-lg p-6 shadow-md hover:shadow-xl transition text-center h-40 flex flex-col justify-between">
            <div class="text-lg font-semibold text-purple-700 dark:text-white">📝 Check your grades</div>
            <a href="{{ route('courses.detail') }}" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">View</a>
        </div>

        <!-- View Payments -->
        <div class="bg-white dark:bg-purple-800 rounded-lg p-6 shadow-md hover:shadow-xl transition text-center h-40 flex flex-col justify-between">
            <div class="text-lg font-semibold text-purple-700 dark:text-white">💳 View Payments</div>
            <a href="{{ route('payments.index') }}" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">View</a>
        </div>
    </div>
</div>
@endrole


                    @role('registrar')
                    <div class="p-6 bg-yellow-100 dark:bg-yellow-800 rounded-xl shadow hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold text-yellow-800 dark:text-white mb-2 flex items-center gap-2">
                            🗂️ Registrar Panel
                        </h2>
                        <ul class="list-disc list-inside text-yellow-700 dark:text-yellow-200 space-y-1">
                            <li>Approve student registrations</li>
                            <li>Manage academic records</li>
                        </ul>
                    </div>
                    @endrole

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
