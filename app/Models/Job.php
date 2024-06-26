<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all (): array
    {
        return [
            
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
    }

    public static function find (int $id): array
    {
        $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job){
            abort(404);
        }

        return $job;
    }
}
