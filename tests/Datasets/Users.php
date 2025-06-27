<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

dataset('users', [
    'registration staff' => [
        [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => fake()->password(),
            'remember_token' => Str::random(10),
        ]
    ]
]);
