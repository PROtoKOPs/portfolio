@extends('layouts.app')

@section('content')
    <!-- 1. Hero-секция -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                {{ $user?->first_name ?? 'Гость' }}, добро пожаловать на портфолио-платформу!
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


@endsection
