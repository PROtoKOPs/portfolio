@extends('layouts.app')

@section('content')
    <!-- Hero-секция -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Мои портфолио
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                Здесь собраны все ваши работы и проекты
            </p>

            <x-primary-button :href="route('portfolios.create')">
                Создать новое портфолио
            </x-primary-button>
        </div>
    </section>

    <!-- Основной контент -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Заголовок секции -->
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800">
                    Список моих работ
                </h2>
            </div>

            <!-- Контейнер для портфолио (пока пустой) -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Здесь будут выводиться портфолио -->
                    <!-- Пример одного элемента (заглушка) -->
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <div class="bg-gray-100 h-48 rounded-md mb-4 flex items-center justify-center">
                            <span class="text-gray-400">Превью портфолио</span>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Название портфолио</h3>
                        <p class="text-gray-600 text-sm mb-3">Описание портфолио</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Дата создания</span>
                            <div class="space-x-2">
                                <button class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                                    Редактировать
                                </button>
                                <button class="text-red-600 hover:text-red-800 text-sm font-medium">
                                    Удалить
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Элемент для пустого состояния -->
                    <div class="hidden border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Нет созданных портфолио</h3>
                        <p class="mt-1 text-sm text-gray-500">Начните с создания нового портфолио</p>
                        <div class="mt-6">
                            <x-primary-button :href="route('portfolios.create')">
                                Создать портфолио
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Пагинация (заглушка) -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <nav class="flex items-center justify-between">
                    <div class="hidden sm:block">
                        <p class="text-sm text-gray-700">
                            Показаны <span class="font-medium">1</span> из <span class="font-medium">1</span> портфолио
                        </p>
                    </div>
                    <div class="flex-1 flex justify-between sm:justify-end space-x-3">
                        <button disabled class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Назад
                        </button>
                        <button disabled class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                            Вперед
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </section>
@endsection
