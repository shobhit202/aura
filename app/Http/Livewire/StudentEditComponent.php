<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StudentEditComponent extends Component
{

    public $name;

    public function mount($id)
    {
        $student = Student::where('id',$id)->first();
        $this->id = $student->id;
        $this->name = $student->name;
    }




    public function updateStudent(){
        $student = Student::where('id',$this->id)->first();
        $student->name = $this->name;
        $student->save();
        
    }

    public function render()
    {
        return view('livewire.student-edit-component')->layout('layouts.app');;
    }
}
