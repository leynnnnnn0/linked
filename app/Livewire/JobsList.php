<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobsList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.jobs-list', ['jobs' => Job::latest()->paginate(8)]);
    }
}
