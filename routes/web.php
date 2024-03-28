<?php

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000',
    ],
    [
        'id' => 2,
        'title' => 'Developer',
        'salary' => '$60,000',
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$30,000',
    ],
];

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs,
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function (int $id) use ($jobs) {
    $job = Arr::first($jobs, fn ($job) => $job['id'] === $id) ?? abort(404);

    return view('job', [
        'job' => $job,
    ]);
})->name('job');

Route::get('/contact', fn () => view('contact'))->name('contact');
