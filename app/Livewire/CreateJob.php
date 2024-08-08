<?php

namespace App\Livewire;

use App\Models\Job;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateJob extends Component
{
    public $title;
    public $company_name;
    public $job_description;
    public $salary;
    protected $rules = [
        'title' => 'required|min:3|max:50',
        'company_name' => 'required|min:3|max:50',
        'job_description' => 'required|min:3',
        'salary' => 'required|numeric'
    ];

    public function render()
    {
        return view('livewire.create-job');
    }

    public function store()
    {
        $validated = $this->validate();
        try{
            Auth::user()->jobs()->create($validated);
            $this->reset();
            notify()->success('Job Created Successfully');
        }catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }
}
