<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn(['name', 'last_name', 'patronymic']);
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['name', 'last_name', 'patronymic']);
        });
    }

    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('name');
            $table->string('last_name');
            $table->string('patronymic');
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('name');
            $table->string('last_name');
            $table->string('patronymic');
        });
    }
};
