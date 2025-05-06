@extends('layouts.app')

@section('content')
    <!-- 1. Hero-секция -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                {{ $user?->name ?? 'Гость' }}, добро пожаловать на портфолио-платформу!
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                Место для демонстрации творческих работ и поиска вдохновения
            </p>

            @auth
                <x-primary-button :href="route('portfolio.create')">
                    Добавить работу
                </x-primary-button>
            @else
                <x-primary-button :href="route('register')">
                    Присоединиться
                </x-primary-button>
            @endauth
        </div>
    </section>

    <!-- 2. Секция последних работ -->
    <section class="py-8 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">
                Последние добавленные работы
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Плейсхолдеры для работ -->
                @for($i = 1; $i <= 3; $i++)
                    <div class="border rounded-lg p-4 bg-white shadow-sm">
                        <div class="bg-gray-200 h-48 mb-4 flex items-center justify-center">
                            <span class="text-gray-500">Работа #{{ $i }}</span>
                        </div>
                        <h3 class="font-medium text-lg mb-2">Название работы</h3>
                        <p class="text-gray-600 mb-3">Автор: </p>
                        <div class="h-4 bg-gray-200 rounded w-full mb-2"></div>
                        <div class="h-4 bg-gray-200 rounded w-2/3"></div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-8">
                <x-secondary-button :href="route('works.index')">
                    Смотреть все работы
                </x-secondary-button>
            </div>
        </div>
    </section>

    <!-- 3. Секция статистики -->
    <section class="py-12 bg-gray-50 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                Наша платформа в цифрах
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">0</div>
                    <div class="text-gray-600">Пользователей</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">0</div>
                    <div class="text-gray-600">Работ</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">0</div>
                    <div class="text-gray-600">Категорий</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-indigo-600 mb-2">0</div>
                    <div class="text-gray-600">Просмотров</div>
                </div>
            </div>
        </div>
    </section>
@endsection
