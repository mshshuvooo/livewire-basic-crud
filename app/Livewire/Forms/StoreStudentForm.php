<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class StoreStudentForm extends Form{
    public $student_name = '';
    public $student_class = '';
    public $student_email = '';


    public function rules()
    {
        return [
            'student_name' => [
                'required', 'string', 'max:255'
            ],
            'student_class' => ['required', 'string', 'max:255'],
            'student_email' => ['required', 'string', 'email', 'unique:students'],
        ];
    }
}
