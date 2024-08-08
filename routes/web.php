<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'jobs');

Route::view('jobs', 'jobs')
    ->name('jobs');

Route::view('for-you', 'for-you')
    ->name('for-you');

Route::view('create-job', 'job.create')
    ->name('create-job');

Route::view('for-you', 'for-you')
    ->middleware(['auth', 'verified'])
    ->name('for-you');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
