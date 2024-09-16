<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;
use App\Livewire\ArticleShow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $article = Article::firstOrFail();
    return redirect()->route('articles.show', $article);
})->name('start.index');

Route::get('/articles/{article:slug}', ArticleShow::class)->name('articles.show');

Route::get('login/{user}', function () {
    $user = User::find(request()->user);
    Auth::login($user);
    return redirect()->back();
})->name('login');


Route::get('logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('start.index');
})->name('logout');
