<?php

namespace App\Livewire\Student;

use App\Models\Student;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.student.index', [
            'students' => Student::paginate(10)
        ]);
    }
}
