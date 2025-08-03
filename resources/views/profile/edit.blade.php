<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <!-- 🌟 Profile Card -->
            <div class="flex items-center bg-gray-800 text-white p-6 sm:p-8 rounded-2xl shadow-lg w-full">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image"
                    class="w-24 h-24 rounded-full border-4 border-purple-500 shadow-md mr-6">
                <div>
                    <h2 class="text-2xl font-bold">{{ Auth::user()->name }}</h2>
                    <p class="text-sm text-gray-300 mt-1">Student ID: {{ Auth::user()->id }}</p>
                    <p class="text-sm text-gray-400">Email: {{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- ✏️ Profile Information -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- 🔐 Update Password -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- ❌ Delete Account -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
