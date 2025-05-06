<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Определяем тип введенных данных (email или телефон)
        $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $request->merge([$fieldType => $request->login]);

        $credentials = $request->validate([
            'email' => ['required_without:phone', 'string', 'email', 'exists:users,email'],
            'phone' => ['required_without:email', 'string', 'exists:users,phone'],
            'password' => ['required', 'string'],
            'remember' => ['boolean'],
        ]);

        // Выбираем только нужные поля для аутентификации
        $authCredentials = [
            $fieldType => $credentials[$fieldType],
            'password' => $credentials['password']
        ];

        if (!Auth::attempt($authCredentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'login' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
