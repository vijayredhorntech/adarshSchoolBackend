<?php

namespace App\Livewire;

use App\Models\AcademicYear;
use Livewire\Component;

class ShowAcademicYear extends Component
{
    public AcademicYear $academicYear;

    public function mount(AcademicYear $academicYear)
    {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag())->getMessages());

        $this->academicYear = $academicYear->loadMissing('semesters');
    }

    public function render()
    {
        return view('livewire.show-academic-year');
    }
}
