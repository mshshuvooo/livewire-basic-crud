<?php

namespace App\Livewire\Components;

use App\Models\Student;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class StudentList extends Component
{
    use WithPagination;
    public $search = "";

    #[Title('Students')]

    public function mount(){

    }
    public function render()
    {
        if($this->search){
            $students = Student::where('student_name','like','%'.$this->search.'%')->paginate(5);
        }else{
            $students = Student::paginate(5);
        }

        return view('livewire.components.student-list', [
            'students' => $students
        ]);
    }
}
