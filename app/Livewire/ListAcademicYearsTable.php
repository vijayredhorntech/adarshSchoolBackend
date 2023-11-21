<?php

namespace App\Livewire;

use App\Services\AcademicYear\AcademicYearService;
use Livewire\Component;

class ListAcademicYearsTable extends Component
{
    public $academicYears;

    public function mount(AcademicYearService $academicYearService)
    {
        $this->setErrorBag(session()->get('errors', new \Illuminate\Support\MessageBag())->getMessages());

        $this->academicYears = $academicYearService->getAllAcademicYears();
    }

    public function render()
    {
        return view('livewire.list-academic-years-table');
    }
}
