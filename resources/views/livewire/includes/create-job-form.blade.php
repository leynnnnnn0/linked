<div>
    <x-notify::notify />
    <form class=" space-y-4 max-w-[400px] mx-auto border border-gray-300 p-4 rounded-lg drop-shadow-xl shadow-2xl">
        <x-input
            id="title"
            wire:model="title"
            name="title"
            label="Title"
            placeholder="Java Developer"
        />
        <x-input
            id="title"
            wire:model="company_name"
            name="company_name"
            label="Company Name"
            placeholder="Microsoft"
        />
        <x-textarea
            id="job_description"
            wire:model="job_description"
            name="job_description"
            label="Description"
            placeholder="Lookin for..." />
        <x-input
            id="salary"
            wire:model="salary"
            name="salary"
            label="Salary"
            placeholder="90000"
        />
        <div wire:click.prevent="store" class="flex justify-end">
            <x-button primary>Submit</x-button>
        </div>
        @if(session('success'))
            <p class="text-green-500 text-xs">{{ session('success') }}</p>
        @endif
    </form>
</div>
