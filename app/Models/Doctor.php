<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'speciality_id',
        'patronymic',
        'contact_information_id',
    ];

    public function info(): MorphOne
    {
        return $this->morphOne(User::class, 'datable');
    }
}
