<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

//O le scrivo tutte le rotte del resource oppure posso utilizzare ::resource
Route::resource('book', BookController::class);

Route::get('author/{author}/show', [AuthorController::class, 'show'])->name('authors.show');
