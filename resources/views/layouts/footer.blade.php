<!-- resources/views/layouts/footer.blade.php -->
<footer class="bg-gray-800 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- О платформе -->
            <div>
                <h3 class="text-lg font-semibold mb-4">О платформе</h3>
                <p class="text-gray-400">Площадка для творческих профессионалов, где можно опубликовать свои работы и найти вдохновение.</p>
            </div>

            <!-- Быстрые ссылки -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Быстрые ссылки</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Главная</a></li>
                    <li><a href="{{ route('projects.popular') }}" class="text-gray-400 hover:text-white transition">Популярные работы</a></li>
                    <li><a href="{{ route('projects.latest') }}" class="text-gray-400 hover:text-white transition">Новые работы</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition">О нас</a></li>
                </ul>
            </div>

            <!-- Контакты -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Контакты</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        contact@portfolio-platform.ru
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +7 (123) 456-78-90
                    </li>
                </ul>
            </div>

            <!-- Соцсети -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Мы в соцсетях</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <!-- Добавьте другие иконки соцсетей -->
                </div>
            </div>
        </div>

        <!-- Копирайт -->
        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} Платформа портфолио. Все права защищены.</p>
        </div>
    </div>
</footer>
