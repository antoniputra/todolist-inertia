<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('mockup', function () {
    return Inertia::render('Mockup');
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(TodoController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::post('/todo', 'store')->name('todo.store');
        Route::put('/todo/{todo}/update', 'update')->name('todo.update');
        Route::delete('/todo/{todo}/delete', 'delete')->name('todo.delete');
        
        // Items...
        Route::post('/todo/{todo}/add-item', 'saveItem')->name('todo.saveItem');
        Route::put('/todo/{todoItem}/toggle-done', 'toggleItemDone')->name('todo.toggleItemDone');
        Route::delete('/todo/{todoItem}/delete-item', 'deleteItem')->name('todo.deleteItem');
    });
});

require __DIR__.'/auth.php';
