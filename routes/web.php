<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/blog', [ BlogPostController::class, 'index' ]);
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);
Route::get('blog/create/post', [BlogPostController::class, 'create']);
Route::post('/blog/create/post', [BlogPostController::class, 'store']);
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']);
Route::post('/blog/{blogPost}/edit', [BlogPostController::class, 'update']);
Route::delete('/blog/{blogPost}', [BlogPostController::class, 'remove']);
