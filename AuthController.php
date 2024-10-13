<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Показ формы регистрации.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Регистрация нового пользователя.
     */
    public function register(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Создание нового пользователя
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Автоматический логин пользователя после регистрации
        Auth::login($user);

        // Перенаправление после успешной регистрации
        return redirect()->route('home')->with('success', 'Регистрация прошла успешно.');
    }
}
