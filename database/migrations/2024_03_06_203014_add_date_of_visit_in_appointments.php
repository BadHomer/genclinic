<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('visit_times', function (Blueprint $table) {
            $table->id();
            $table->time('time');
        });

        $date = \Carbon\Carbon::now();
        for($i = 8; $i <= 18;$i++){
            $date->hour = $i;
            $date->minute = 0;
            $date->second = 0;
            \App\Models\VisitTime::create(['time' => $date->toTimeString()]);

            $date->minute = 30;
            \App\Models\VisitTime::create(['time' => $date->toTimeString()]);
        }

        Schema::table('appointments', function (Blueprint $table) {
            $table->date('date_of_visit')->default(\Carbon\Carbon::now()->addDay());
            $table->dropForeign(['record_type_id']);
            $table->foreign('record_type_id')
                ->references('id')
                ->on('record_types')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->dropForeign(['med_card_id']);
            $table->foreign('med_card_id')
                ->references('id')
                ->on('medical_histories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('date_of_visit');
        });

        Schema::dropIfExists('visit_times');
    }
};
