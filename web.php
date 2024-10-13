<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;


Route::get('/imgslider', function () {
    return view('imgslider');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/news', function () {
    return view('news');
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
Route::get('/lk', function () {
    return view('lk');
});
Route::get('/createnews', function () {
    return view('createnews');
});
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('profile', [AuthController::class, 'updateProfile'])->name('profile.update');

Route::post('/news', [NewsController::class, 'createNews'])->name('news.create');
Route::get('news', [NewsController::class, 'index'])->name('news.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//Route::get('/news', [NewsController::class, 'index'])->name('news.index');
//Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
//Route::post('/news', [NewsController::class, 'store'])->name('news.store');
//Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

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




