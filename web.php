<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/', [\App\Http\Controllers\PageController::class, 'news'])->name('404');
Route::get('/', [\App\Http\Controllers\PageController::class, 'about'])->name('О нас');
Route::get('/', [\App\Http\Controllers\PageController::class, 'events'])->name('Мероприятия');
Route::get('/', [\App\Http\Controllers\PageController::class, 'projects'])->name('Наши проекты');
Route::get('/', [\App\Http\Controllers\PageController::class, 'organizers'])->name('Наши организаторы');

//Route::get('/', [\App\Http\Controllers\PageController::class, 'ourgames'])->name('Список Игр');
//Route::get('/', [\App\Http\Controllers\PageController::class, 'registration'])->name('Регистрация');
//Route::get('/', [\App\Http\Controllers\PageController::class, 'entrance'])->name('Вход');




