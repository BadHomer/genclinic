<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'med_card_id',
        'recipe',
        'doctor_id',
        'record_type_id',
        'date_of_visit',
        'visit_time_id'
    ];


    public function visitTime(): BelongsTo
    {
        return $this->belongsTo(VisitTime::class);
    }

    protected $casts = [
        'date_of_visit' => 'datetime'
    ];
}
