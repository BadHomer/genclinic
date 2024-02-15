<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'second_name' => $this->second_name,
            'last_name' => $this->last_name,
            'sex' => $this->sex,
            'address' => $this->address,
            'phone' => $this->phone,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'login' => $this->login,
            'password' => $this->password,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
