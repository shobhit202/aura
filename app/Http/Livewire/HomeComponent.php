<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $students = Student::latest()->get();
        return view('livewire.home-component',compact('students'))->layout('layouts.app');
    }
}
