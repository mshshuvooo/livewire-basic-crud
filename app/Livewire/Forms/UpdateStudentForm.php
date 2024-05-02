<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateStudentForm extends Form{
    public $student;
    public $student_name;
    public $student_class;
    public $student_email;

    public function setStudent($student) {
        $this->student = $student;
        $this->student_name = $student->student_name;
        $this->student_class = $student->student_class;
        $this->student_email = $student->student_email;
    }

    public function rules()
    {
        return [
            'student_name' => [
                'required', 'string', 'max:255'
            ],
            'student_class' => ['required', 'string', 'max:255'],
            'student_email' => ['required', 'string', 'email', "unique:students,student_email,{$this->student->id}"],
        ];
    }
}
