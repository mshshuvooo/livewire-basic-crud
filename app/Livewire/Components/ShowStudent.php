<?php

namespace App\Livewire\Components;

use App\Models\Student;
use Livewire\Component;

class ShowStudent extends Component
{
    public $student;
    public function mount(Student $student){
        $this->student = $student;
    }

    public function delete_student(Student $student){
        $student->delete();
        session()->flash('success', 'Student deleted successfully');
        return $this->redirect("/students", navigate:true);
    }

    public function render()
    {
        return view('livewire.components.show-student');
    }
}
