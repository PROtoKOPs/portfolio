<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('portfolio.about');
})->name('about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');

Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
Route::get('/my-portfolios', [PortfolioController::class, 'myPortfolios'])->name('my.portfolios');


// Маршруты для портфолио
Route::prefix('portfolio')->group(function () {
    // Просмотр всех портфолио (доступно всем)
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolios.index');

    // Личные портфолио пользователя (требует авторизации)
    Route::middleware('auth')->group(function () {
        Route::get('/my', [PortfolioController::class, 'myPortfolios'])->name('my.portfolios');
        Route::get('/editor', [PortfolioController::class, 'editor'])->name('portfolio.editor');
        Route::get('/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    });
});

// Маршруты для работ
Route::prefix('projects')->group(function () {
    // Популярные работы
    Route::get('/popular', [ProjectController::class, 'popular'])
         ->name('projects.popular');

    // Последние работы
    Route::get('/latest', [ProjectController::class, 'latest'])
         ->name('projects.latest');

    // Детальная страница работы
    Route::get('/{project}', [ProjectController::class, 'show'])
         ->name('projects.show');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
