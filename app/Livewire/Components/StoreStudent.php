<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\StoreStudentForm;
use App\Models\Student;
use Livewire\Component;

class StoreStudent extends Component
{

    public StoreStudentForm $store_student_form;


    public function render()
    {
        return view('livewire.components.store-student');
    }

    public function store(){
        Student::create($this->store_student_form->validate());
        $this->store_student_form->reset();
        session()->flash('success', 'Student Added Successfully');
        return $this->redirect('/students', navigate:true);
    }
}
