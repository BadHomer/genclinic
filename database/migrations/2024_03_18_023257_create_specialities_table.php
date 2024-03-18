<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->unsignedBigInteger('speciality_id')->nullable()->change();
            $table->foreign('speciality_id')
                ->references('id')
                ->on('specialities')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['speciality_id']);
        });
        Schema::dropIfExists('specialities');

    }
};
