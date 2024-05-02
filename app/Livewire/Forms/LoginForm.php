<?php

namespace App\Livewire\Forms;

use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form{
    public $email = '';
    public $password = '';


    public function rules()
    {
        return [
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ];
    }
}
