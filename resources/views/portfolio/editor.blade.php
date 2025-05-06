@extends('layouts.app')

@section('content')
    <!-- 1. Hero-секция редактора -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-12 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Редактирование портфолио
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Настройте внешний вид и содержимое вашего портфолио
            </p>
        </div>
    </section>

    <!-- 2. Основная форма редактирования -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <!-- Вкладки для разных разделов -->
            <div class="border-b border-gray-200 mb-6">
                <nav class="flex -mb-px space-x-8">
                    <button type="button" class="border-b-2 border-indigo-500 px-4 py-3 text-sm font-medium text-indigo-600">
                        Основная информация
                    </button>
                    <button type="button" class="border-b-2 border-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Работы
                    </button>
                    <button type="button" class="border-b-2 border-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        Внешний вид
                    </button>
                </nav>
            </div>

            <!-- Форма основной информации -->
            <div class="space-y-6">
                <!-- Поле названия -->
                <div>
                    <label for="portfolio-title" class="block text-sm font-medium text-gray-700 mb-1">
                        Название портфолио
                    </label>
                    <input type="text" id="portfolio-title" name="title"
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Поле описания -->
                <div>
                    <label for="portfolio-description" class="block text-sm font-medium text-gray-700 mb-1">
                        Описание
                    </label>
                    <textarea id="portfolio-description" name="description" rows="4"
                              class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>

                <!-- Загрузка обложки -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Обложка портфолио
                    </label>
                    <div class="mt-1 flex items-center">
                        <span class="inline-block h-16 w-16 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                        <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Изменить
                        </button>
                    </div>
                </div>
            </div>

            <!-- Кнопки действий -->
            <div class="mt-8 flex justify-end space-x-4">
                <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Отменить
                </button>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Сохранить изменения
                </button>
            </div>
        </div>
    </section>
@endsection
