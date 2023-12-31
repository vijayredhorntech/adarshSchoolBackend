<?php

namespace App\Livewire;

use Livewire\Component;

class CreateStudentForm extends Component
{
    public function mount()
    {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag())->getMessages());
    }

    public function render()
    {
        return view('livewire.create-student-form');
    }
}
