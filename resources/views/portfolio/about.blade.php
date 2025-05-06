@extends('layouts.app')

@section('content')
    <!-- 1. Hero-секция -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                О нашей платформе
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Узнайте больше о миссии, ценностях и команде проекта
            </p>
        </div>
    </section>

    <!-- 2. Основной контент -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Блок Миссия -->
            <div class="p-8 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Наша миссия</h2>
                <p class="text-gray-600 leading-relaxed">
                    Мы создаем пространство, где творческие профессионалы могут демонстрировать свои работы, находить вдохновение и устанавливать профессиональные связи. Наша цель - сделать процесс создания и представления портфолио простым и эффективным.
                </p>
            </div>

            <!-- Блок Ценности -->
            <div class="p-8 border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Наши ценности</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">Креативность</h3>
                        <p class="text-gray-600">Мы поощряем нестандартное мышление и инновационные подходы</p>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">Доступность</h3>
                        <p class="text-gray-600">Наши инструменты доступны для всех, независимо от уровня навыков</p>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">Сообщество</h3>
                        <p class="text-gray-600">Мы строим поддерживающее сообщество профессионалов</p>
                    </div>
                </div>
            </div>

            <!-- Блок "Команда" -->
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Наша команда</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Член команды 1 -->
                    <div class="text-center">
                        <div class="h-32 w-32 mx-auto mb-4 rounded-full bg-gray-200 overflow-hidden">
                            <!-- фото -->
                            <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Алексей Иванов</h3>
                        <p class="text-indigo-600">Основатель & CEO</p>
                        <p class="text-gray-600 mt-2 text-sm">15 лет опыта в веб-разработке</p>
                    </div>

                    <!-- Член команды 2 -->
                    <div class="text-center">
                        <div class="h-32 w-32 mx-auto mb-4 rounded-full bg-gray-200 overflow-hidden">
                            <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Мария Петрова</h3>
                        <p class="text-indigo-600">Дизайн-директор</p>
                        <p class="text-gray-600 mt-2 text-sm">Специалист по UX/UI</p>
                    </div>

                    <!-- Член команды 3 -->
                    <div class="text-center">
                        <div class="h-32 w-32 mx-auto mb-4 rounded-full bg-gray-200 overflow-hidden">
                            <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Дмитрий Сидоров</h3>
                        <p class="text-indigo-600">Разработчик</p>
                        <p class="text-gray-600 mt-2 text-sm">Full-stack разработчик</p>
                    </div>

                    <!-- Член команды 4 -->
                    <div class="text-center">
                        <div class="h-32 w-32 mx-auto mb-4 rounded-full bg-gray-200 overflow-hidden">
                            <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800">Елена Кузнецова</h3>
                        <p class="text-indigo-600">Маркетинг</p>
                        <p class="text-gray-600 mt-2 text-sm">SMM и контент-стратегия</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CTA секция -->
    <section class="bg-indigo-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Хотите присоединиться к нашей команде?
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-6">
                Мы всегда рады талантливым людям!
            </p>
            <x-primary-button :href="route('contact')">
                Связаться с нами
            </x-primary-button>
        </div>
    </section>
@endsection
