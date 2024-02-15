<?php

namespace App\Policies;

use App\Models\doctor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class doctorPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, doctor $doctor): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, doctor $doctor): bool
    {
    }

    public function delete(User $user, doctor $doctor): bool
    {
    }

    public function restore(User $user, doctor $doctor): bool
    {
    }

    public function forceDelete(User $user, doctor $doctor): bool
    {
    }
}
