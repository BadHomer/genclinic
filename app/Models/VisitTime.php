<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VisitTime extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'time',
    ];


    protected $casts = [
        'time' => 'datetime: H:i',
    ];
    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class, 'appointment_visit_time');
    }
}
