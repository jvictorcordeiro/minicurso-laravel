<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('atividades')->controller(AtividadeController::class)->group(function () {
        Route::get('/', 'index')->name('atividades.index');
        Route::get('/create', 'create')->name('atividades.create');
        Route::post('/', 'store')->name('atividades.store');
        Route::get('/{atividade_id}/edit', 'edit')->name('atividades.edit');
        Route::patch('/{atividade_id}', 'update')->name('atividades.update');
        Route::delete('/{atividade_id}', 'destroy')->name('atividades.destroy');

    });

    Route::prefix('tarefas')->controller(TarefaController::class)->group(function () {
        Route::get('/', 'index')->name('tarefas.index');
        Route::get('/create', 'create')->name('tarefas.create');
        Route::post('/', 'store')->name('tarefas.store');
        Route::get('/{tarefa_id}/edit', 'edit')->name('tarefas.edit');
        Route::patch('/{tarefa_id}', 'update')->name('tarefas.update');
        Route::delete('/{tarefa_id}', 'destroy')->name('tarefas.destroy');

    });
});




require __DIR__.'/auth.php';
