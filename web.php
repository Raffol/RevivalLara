<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

Route::get('/imgslider', function () {
    return view('imgslider');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/news', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/entrance', function () {
    return view('entrance');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/organizers', function () {
    return view('organizers');
});
Route::get('/projects', function () {
    return view('404');
});
Route::get('/lk', function () {
    return view('lk');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/ourgames', function () {
    return view('404');
});
//Route::get('/lk', [UserProfileController::class, 'lk'])->middleware('auth')->name('Личный кабинет');

//Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');
//Route::get('/404', [\App\Http\Controllers\PageController::class, '404'])->name('404');
//Route::get('/news', [\App\Http\Controllers\PageController::class, 'news'])->name('Новости');
//Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('О нас');
//Route::get('/events', [\App\Http\Controllers\PageController::class, 'events'])->name('Мероприятия');
//Route::get('/projects', [\App\Http\Controllers\PageController::class, 'projects'])->name('Наши проекты');
//Route::get('/organizers', [\App\Http\Controllers\PageController::class, 'organizers'])->name('Наши организаторы');
//Route::get('/lk', [\App\Http\Controllers\PageController::class, 'lk'])->name('Личный кабинет');
//
//Route::get('/ourgames', [\App\Http\Controllers\PageController::class, 'ourgames'])->name('Список Игр');
//Route::get('/registration', [\App\Http\Controllers\PageController::class, 'registration'])->name('Регистрация');
//Route::get('/entrance', [\App\Http\Controllers\PageController::class, 'entrance'])->name('Вход');




