<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\UpdateStudentForm;
use App\Models\Student;
use Livewire\Component;
use Livewire\Livewire;

class UpdateStudent extends Component
{
    public $student;
    public $student_name;
    public $student_class;
    public $student_email;

    public UpdateStudentForm $update_student_form;


    public function mount(Student $student){
        $this->update_student_form->setStudent($student);
    }

    public function update() {
        $this->student->update($this->update_student_form->validate());
        session()->flash('success', 'Student Updated Susseccfully');
        return $this->redirect('/students', navigate:true);
    }

    public function render()
    {
        return view('livewire.components.update-student');
    }
}
