@include('header')
<style>
    h1{
        text-align: center;
    }
</style>
<h1>Новости</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<ul>
    @foreach ($news as $newsItem)
        <li>
            <h3>{{ $newsItem->title }}</h3>
            <p>{{ $newsItem->content }}</p>
            <p><small>Author: {{ $newsItem->author }}</small></p>
        </li>
    @endforeach
</ul>

@include('footer')
{{--@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Новости</h1>

@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif

    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Добавить новость</a>

@if ($news->isEmpty())
        <p>Нет новостей.</p>
@else
        <ul class="list-group">
@foreach ($news as $newsItem)
                <li class="list-group-item">
                    <h5>{{ $newsItem->title }}</h5>
                    <p>{{ Str::limit($newsItem->content, 100) }}</p>
                    <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-secondary">Подробнее</a>
                </li>
@endforeach
        </ul>
@endif
</div>
@endsection--}}
