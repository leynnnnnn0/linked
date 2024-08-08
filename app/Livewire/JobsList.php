<?php

namespace App\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobsList extends Component
{
    use WithPagination;
    public string $search = '';
    public function render()
    {
        return view('livewire.jobs-list', ['jobs' => Job::latest()->where('title', 'like', "%{$this->search}%")->paginate(8)]);
    }
}
