<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient',
    ];
}
