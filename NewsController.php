<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Метод для отображения списка новостей
    public function index()
    {
        // Получаем все новости из базы данных
        $news = News::all();

        // Возвращаем представление и передаем новости в шаблон
        return view('newsindex', compact('news'));
    }

    // Метод для создания новости
    public function createNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => auth()->user()->name,
        ]);

        return redirect()->route('newsindex')->with('success', 'News added successfully.');
    }
}

/*public function createNews(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required',
    ]);

    News::create([
        'title' => $request->title,
        'content' => $request->content,
        'author' => auth()->user()->name,
    ]);

    return redirect()->route('news.index')->with('success', 'News added successfully.');
}

public function index()
{
    $news = News::orderBy('created_at', 'desc')->get();
    return view('news.index', compact('news'));
}*/

