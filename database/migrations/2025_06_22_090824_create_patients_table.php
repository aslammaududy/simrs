<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('ihs');
            $table->string('medical_record_number');
            $table->string('name');
            $table->string('nik');
            $table->string('bpjs_number');
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('address');
            $table->string('phone');
            $table->dateTime('register_at')->default(now());
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
