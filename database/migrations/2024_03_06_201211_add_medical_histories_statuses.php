<?php

use App\Models\MedicalHistoryStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        \App\Models\MedicalHistoryStatus::create([
            'id' => MedicalHistoryStatusEnum::init->value,
            'name' => MedicalHistoryStatusEnum::init->name
        ]);
        \App\Models\MedicalHistoryStatus::create([
            'id' => MedicalHistoryStatusEnum::continued->value,
            'name' => MedicalHistoryStatusEnum::continued->name
        ]);
        \App\Models\MedicalHistoryStatus::create([
            'id' => MedicalHistoryStatusEnum::closed->value,
            'name' => MedicalHistoryStatusEnum::closed->name
        ]);
    }

    public function down(): void
    {

    }
};
