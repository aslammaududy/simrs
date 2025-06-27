<?php

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;

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

it('can update a patient')
    ->with('users', 'patients')
    ->expect(function ($users, $patients) {
        $registration_staff = \App\Models\User::create($users);
        $this->actingAs($registration_staff);
        $patient = Patient::create($patients);
        $updated_data = array_merge($patients, ['name' => 'updated name']);
        return $this->putJson('api/patients/' . $patient["id"], $updated_data);
    })->assertStatus(200)
    ->assertJson(['data' => ['name' => 'updated name']]);

it('can delete a patient')
    ->with('users', 'patients')
    ->expect(function ($users, $patients) {
        $registration_staff = \App\Models\User::create($users);
        $this->actingAs($registration_staff);
        $patient = Patient::create($patients);
        return $this->deleteJson('api/patients/' . $patient["id"]);
    })->assertStatus(200);
