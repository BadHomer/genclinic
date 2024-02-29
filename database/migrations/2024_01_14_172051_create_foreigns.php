<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('med_cards', function (Blueprint $table) {
            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::table('medical_histories', function (Blueprint $table) {
            $table->foreign('med_card_id')
                ->references('id')
                ->on('med_cards')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('medical_history_status_id')
                ->references('id')
                ->on('medical_history_statuses')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('doctor_id')
                ->references('id')
                ->on('doctors')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign('med_card_id')
                ->references('id')
                ->on('med_cards')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('record_type_id')
                ->references('id')
                ->on('med_cards')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('med_cards', function (Blueprint $table) {
            $table->dropForeign(['patient_id']);
        });

        Schema::table('medical_histories', function (Blueprint $table) {
            $table->dropForeign(['med_card_id', 'medical_history_status_id', 'doctor_id']);
        });

        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['med_card_id', 'record_type_id']);
        });
    }
};
