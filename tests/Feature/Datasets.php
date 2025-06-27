<?php

use Illuminate\Support\Carbon;

dataset('patients', [
    'patients' => [
        [
            'medical_record_number' => fake()->randomNumber(),
            'ihs' => fake()->randomNumber(),
            'name' => fake()->name(),
            'nik' => fake()->randomNumber(),
            'bpjs_number' => fake()->randomNumber(),
            'birth_date' => fake()->date(),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->streetAddress(),
            'phone' => fake()->phoneNumber(),
            'register_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
    ]
]);

dataset('incomplete_patients', [
    'patients' => [
        [
            'medical_record_number' => fake()->randomNumber(),
//            'name' => fake()->name(),
            'nik' => fake()->randomNumber(),
            'bpjs_number' => fake()->randomNumber(),
            'birth_date' => fake()->date(),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->streetAddress(),
            'phone' => fake()->phoneNumber(),
            'register_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
    ]
]);
