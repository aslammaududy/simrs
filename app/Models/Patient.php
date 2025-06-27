<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'medical_record_number',
        'name',
        'nik',
        'bpjs_number',
        'birth_date',
        'gender',
        'register_at',
        'address',
        'phone',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'register_at' => 'datetime',
        ];
    }
}
