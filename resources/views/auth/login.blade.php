<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email или телефон -->
        <div>
            <x-input-label for="login" :value="__('Email или телефон')" />
            <x-text-input id="login" class="block mt-1 w-full"
                          type="text"
                          name="login"
                          :value="old('login')"
                          required
                          autofocus
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Пароль -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Пароль')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required
                          autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Запомнить меня -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                       name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif

            <div class="flex items-center">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 me-4"
                   href="{{ route('register') }}">
                    {{ __('Регистрация') }}
                </a>

                <x-primary-button>
                    {{ __('Войти') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
