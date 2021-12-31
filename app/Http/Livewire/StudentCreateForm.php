<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Classroom;
use App\Models\Student;
use Carbon\Carbon;

class StudentCreateForm extends Component
{
    public $classrooms,
    $fname, $lname,$email, $classroom_id, $birthdate, $gender,
    $response ;

    protected function getRules(){
        return [
            'fname' => "required|string|min:3|max:255",
            'lname' => "required|string|min:3|max:255",
            'email' => "required|string|email",
            'classroom_id' => "required|integer",
            'birthdate' => "required|string|date|before:".Carbon::now()->subYear(5),
            'gender' => "required|string|in:M,F"
        ];
    }

    public function mount(){
        $this->classrooms =Classroom::all($columns = ["libel", "id"]);
        $this->classroom_id = $this->classrooms->first()->id ;
        $this->gender = 'M';
        // $this->fname = "jojo";
        // $this->lname = "jojo";
        // $this->email = "jo@jo.ci";
        // $this->classroom_id = 1;
        // $this->birthdate = "23/12/2000";
        // $this->gender = "M";
    }

    public function updated($field){
        $this->validateOnly($field, $this->getRules());
    }

    public function submitForm(){
        $data = $this->validate($this->getRules());
        $faker = \Faker\Factory::create();
        $data["register"] = $faker->numberBetween($int1 = 100,$int2 = 1000);
        Student::create($data);
        $this->reset(["classroom_id", "fname", "lname", "email", "birthdate", "gender"]);

        session()->flash("response", "Enregistrement effectué !");
    }


    public function render()
    {
        return view('livewire.student-create-form');
    }
}
