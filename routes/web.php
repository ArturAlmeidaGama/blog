<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('posts/{id}', [PostController::class, 'show'])->whereNumber('id');