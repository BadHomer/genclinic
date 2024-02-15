<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'second_name' => ['nullable'],
            'last_name' => ['required'],
            'sex' => ['required'],
            'address' => ['nullable'],
            'phone' => ['nullable'],
            'birthday' => ['required', 'date'],
            'email' => ['nullable', 'email', 'max:254'],
            'login' => ['required'],
            'password' => ['required'],
        ]);

        return new UserResource(User::create($data));
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required'],
            'second_name' => ['nullable'],
            'last_name' => ['required'],
            'sex' => ['required'],
            'address' => ['nullable'],
            'phone' => ['nullable'],
            'birthday' => ['required', 'date'],
            'email' => ['nullable', 'email', 'max:254'],
            'login' => ['required'],
            'password' => ['required'],
        ]);

        $user->update($data);

        return new UserResource($user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json();
    }
}
