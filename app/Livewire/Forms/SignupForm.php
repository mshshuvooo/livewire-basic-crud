<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SignupForm extends Form{
    public $name = '';
    public $email = '';
    public $password = '';


    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255'
            ],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', Password::min(8)],
        ];
    }
}
