@guest
<div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm text-blue-700">
                Вы используете гостевой режим.
                <a href="{{ route('register') }}" class="font-medium underline text-blue-700 hover:text-blue-600">
                    Зарегистрируйтесь
                </a>
                или
                <a href="{{ route('login') }}" class="font-medium underline text-blue-700 hover:text-blue-600">
                    войдите
                </a>,
                чтобы получить полный доступ.
            </p>
        </div>
    </div>
</div>
@endguest
