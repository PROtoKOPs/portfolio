
@extends('layouts.app')

@section('content')
    <!-- Hero-секция -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Все портфолио
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                Просмотрите работы наших пользователей
            </p>
        </div>
    </section>

    <!-- Список портфолио -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($portfolios as $portfolio)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <!-- Заглушка для изображения -->
                    <div class="h-48 bg-gray-100 flex items-center justify-center">
                        <svg class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $portfolio->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($portfolio->description, 100) }}</p>

                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                     src="{{ $portfolio->user->avatar_url ?? asset('images/default-avatar.png') }}"
                                     alt="{{ $portfolio->user->name }}">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ $portfolio->user->name }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    {{ $portfolio->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">Нет портфолио</h3>
                    <p class="mt-1 text-gray-500">Пока никто не добавил свои работы</p>
                </div>
            @endforelse
        </div>

        <!-- Пагинация -->
        <div class="mt-8">
            {{ $portfolios->links() }}
        </div>
    </section>
@endsection
