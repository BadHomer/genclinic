<?php

namespace App\Models;


use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
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
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'birthday' => 'datetime',
        'password' => 'hashed'
    ];

    public function getFullName() : string
    {
        return "{$this->name} {$this->second_name} {$this->last_name}";
    }
    public function datable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isDoctor(): bool
    {
        return $this->datable_type === RoleEnum::doctor->value;
    }

}
