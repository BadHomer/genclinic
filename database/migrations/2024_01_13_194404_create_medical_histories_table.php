<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('med_card_id');
            $table->unsignedBigInteger('doctor_id');
            $table->text('description');
            $table->unsignedBigInteger('medical_history_status_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medical_histories');
    }
};
