<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
        [
            "id" => 1,
            "title" => "Director",
            "salary" => "$150,000"
        ],
        [
            "id" => 2,
            "title" => "Manager",
            "salary" => "120,000"
        ],
        [
            "id" => 3,
            "title" => "President",
            "salary" => "$130,000"
        ]
        ]
    ]);
});

Route::get("/jobs/{id}", function ($id) {
    $jobs = [
        [
            "id" => 1,
            "title" => "Director",
            "salary" => "$150,000"
        ],
        [
            "id" => 2,
            "title" => "Manager",
            "salary" => "120,000"
        ],
        [
            "id" => 3,
            "title" => "President",
            "salary" => "$130,000"
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view("job", ["job" => $job]);
    // dd($jobs);
});

Route::get('/contact', function () {
    return view('contact');
});
