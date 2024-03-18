<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'speciality_id',
        'photo_path'

    ];

    protected $casts = [
        'created_at' => 'date',
    ];

    public function info(): MorphOne
    {
        return $this->morphOne(User::class, 'datable');
    }

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Speciality::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class, 'doctor_id');
    }
}
