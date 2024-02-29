<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->morphs('datable');
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropMorphs('datable');
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }
};
