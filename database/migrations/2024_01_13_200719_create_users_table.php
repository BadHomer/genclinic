<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('sex');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('birthday');
            $table->string('email')->nullable();
            $table->string('login');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
