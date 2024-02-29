<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'patronymic',
        'contact_information_id',
        'snils',
    ];


    public function info(): MorphOne
    {
        return $this->morphOne(User::class, 'datable');
    }
}
