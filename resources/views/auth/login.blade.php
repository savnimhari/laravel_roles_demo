<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white dark:bg-gray-900 rounded-xl shadow-md overflow-hidden p-8">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Login to Your Account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline dark:text-indigo-400">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit -->
            <div>
                <x-primary-button class="w-full justify-center py-2 text-lg">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
