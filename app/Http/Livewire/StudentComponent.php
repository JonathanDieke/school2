<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class StudentComponent extends Component
{
    use WithPagination ;
    public $q ;

    // public function mount(){
    //     $this->students = Student::all()  ;
    // }

    public function render()
    {
        $q = "%".$this->q."%";
        $students = Student::where("register", "LIKE",  $q)
                            ->orWhere("fname", "LIKE",  $q)
                            ->orWhere("lname", "LIKE",  $q)
                            ->orWhere("email", "LIKE",  $q)
                            ->orderBy("id", "DESC")
                            ->paginate(5);
        return view('livewire.student-component', compact('students'));
    }
}
