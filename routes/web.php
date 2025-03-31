<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\CreatePost;

Route::get('/', Todos::class);

Route::get('counter', Counter::class);

Route::get('posts', ShowPosts::class);
Route::get('posts/create', CreatePost::class);