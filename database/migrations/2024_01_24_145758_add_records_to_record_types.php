<?php

use App\Models\RecordType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('record_types', function (Blueprint $table) {
            RecordType::create(['id' => 1, 'name' => 'numeric']);
            RecordType::create(['id' => 2, 'name' => 'online']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('record_types', function (Blueprint $table) {
            RecordType::destroy([1,2]);
        });
    }
};
