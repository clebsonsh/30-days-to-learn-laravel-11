<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');

Route::prefix('jobs')->name('jobs.')->group(function () {
    Route::get('', function () {
        $jobs = Job::query()
            ->with('employer')
            ->latest()
            ->paginate();

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    })->name('index');

    Route::get('create', function () {
        return view('jobs.create');
    })->name('create');

    Route::post('', function () {
        // validation...

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect()->route('jobs.index');
    })->name('store');

    Route::get('{job}', function (Job $job) {
        return view('jobs.show', [
            'job' => $job,
        ]);
    })->name('show');
});

Route::get('/contact', fn() => view('contact'))->name('contact');
