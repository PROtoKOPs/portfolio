<x-guest-layout>
    <!-- Общее сообщение о необходимости заполнить обязательные поля -->
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border-l-4 border-red-500 rounded">
            <p class="font-medium text-red-700">{{ __('Пожалуйста, заполните все обязательные поля') }}</p>
            <ul class="mt-1 text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" id="registrationForm">
        @csrf

        <!-- Заголовок обязательных полей -->
        <div class="mb-2 text-sm text-red-500">* {{ __('Обязательные поля') }}</div>

        <!-- Имя -->
        <div class="mt-3">
            <x-input-label for="first_name">
                {{ __('Имя') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="first_name" class="block mt-1 w-full"
                          type="text" name="first_name"
                          :value="old('first_name')"
                          required
                          autofocus />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Фамилия -->
        <div class="mt-4">
            <x-input-label for="last_name">
                {{ __('Фамилия') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="last_name" class="block mt-1 w-full"
                          type="text" name="last_name"
                          :value="old('last_name')"
                          required />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Отчество (необязательное) -->
        <div class="mt-4">
            <x-input-label for="patronymic" :value="__('Отчество (необязательно)')" />
            <x-text-input id="patronymic" class="block mt-1 w-full"
                          type="text" name="patronymic"
                          :value="old('patronymic')" />
            <x-input-error :messages="$errors->get('patronymic')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email">
                {{ __('Email') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="email" class="block mt-1 w-full"
                          type="email" name="email"
                          :value="old('email')"
                          required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Телефон (теперь обязательное поле) -->
        <div class="mt-4">
            <x-input-label for="phone">
                {{ __('Телефон') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="phone" class="block mt-1 w-full"
                          type="tel" name="phone"
                          :value="old('phone')"
                          required
                          placeholder="+7 (XXX) XXX-XX-XX" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Пароль -->
        <div class="mt-4">
            <x-input-label for="password">
                {{ __('Пароль') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required
                          autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Подтверждение пароля -->
        <div class="mt-4">
            <x-input-label for="password_confirmation">
                {{ __('Подтвердите пароль') }} <span class="text-red-500">*</span>
            </x-input-label>
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation"
                          required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Уже зарегистрированы?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>

    <!-- JavaScript для валидации телефона -->
    <script>
        document.getElementById('phone').addEventListener('input', function(e) {
            // Удаляем все нецифровые символы
            let phone = this.value.replace(/\D/g, '');

            // Форматируем номер телефона
            if (phone.length > 0) {
                phone = '+' + phone;
                if (phone.length > 2) {
                    phone = phone.substring(0, 2) + ' (' + phone.substring(2);
                }
                if (phone.length > 7) {
                    phone = phone.substring(0, 7) + ') ' + phone.substring(7);
                }
                if (phone.length > 12) {
                    phone = phone.substring(0, 12) + '-' + phone.substring(12);
                }
                if (phone.length > 15) {
                    phone = phone.substring(0, 15) + '-' + phone.substring(15);
                }
            }

            this.value = phone;
        });

        // Валидация формы
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const phoneField = document.getElementById('phone');
            const phoneValue = phoneField.value.replace(/\D/g, '');

            if (phoneValue.length < 11) {
                e.preventDefault();
                const errorElement = phoneField.nextElementSibling;
                if (!errorElement.classList.contains('text-red-600')) {
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'mt-2 text-sm text-red-600';
                    errorDiv.textContent = 'Введите корректный номер телефона (минимум 11 цифр)';
                    phoneField.classList.add('border-red-500');
                    phoneField.after(errorDiv);
                }
            }
        });
    </script>
</x-guest-layout>
