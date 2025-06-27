<?php

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can not create a patient with incomplete data')
    ->with('users', 'incomplete_patients')
    ->expect(function ($users, $incomplete_patients) {
        $registration_staff = \App\Models\User::create($users);
        $this->actingAs($registration_staff);
        return $this->post('api/patients', $incomplete_patients);
    })
    ->assertFound();

it('can create a new patient')
    ->with('users', 'patients')
    ->expect(function ($users, $patients) {
        $registration_staff = \App\Models\User::create($users);
        $this->actingAs($registration_staff);
        return $this->post('api/patients', $patients);
    })
    ->assertStatus(201);
