<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Welcome, {{ auth()->user()->name }}!</h3>
                    <p class="mb-4">You are logged in as a <strong>Student</strong>.</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        <a href="{{ route('payments.index') }}">View My Payments</a>
                    </button>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover">
                        <a href="{{ route('courses.index') }}">View My Courses</a>
                    </button>
                    
                    
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-800">My Courses</h4>
                            <p class="text-blue-600">View enrolled courses</p>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800">Assignments</h4>
                            <p class="text-green-600">View and submit assignments</p>
                        </div>
                        
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-purple-800">Grades</h4>
                            <p class="text-purple-600">Check your grades and progress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
