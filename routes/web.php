<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [TweetController::class, 'index'])->name('tweets.index');
Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
Route::delete('/tweets/{id}', [TweetController::class, 'destroy'])->name('tweets.destroy');

require __DIR__.'/auth.php';
