<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;
use Illuminate\Contracts\Validation\Rule;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', new Password, 'confirmed'];
    }
}
