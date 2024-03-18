<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use RateLimiter;
use Str;

class UserLoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'login' => ['required', 'exists:users'],
            'password' => ['required'],
        ];
    }

    public function authenticate(): void
    {
        $login = 'login';

        $this->ensureIsNotRateLimited($login);

        if (! Auth::guard('sanctum')->attempt($this->only($login, 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey($login));

            throw ValidationException::withMessages([
                $login => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey($login));
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited(string $login): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($login), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey($login));

        throw ValidationException::withMessages([
            $login => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     */
    public function throttleKey(string $login): string
    {
        return Str::transliterate(Str::lower($this->input($login)).'|'.$this->ip());
    }
}
