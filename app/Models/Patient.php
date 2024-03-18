<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'snils',
        'passport'
    ];


    public function info(): MorphOne
    {
        return $this->morphOne(User::class, 'datable');
    }
}
