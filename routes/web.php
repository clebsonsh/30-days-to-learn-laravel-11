<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(),
    ]);
})->name('jobs');

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', [
        'job' => $job,
    ]);
})->name('job');

Route::get('/contact', fn () => view('contact'))->name('contact');
