<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'second_name',
        'last_name',
        'sex',
        'address',
        'phone',
        'birthday',
        'email',
        'login',
        'password',
    ];

    protected $casts = [
        'birthday' => 'datetime',
    ];


}
