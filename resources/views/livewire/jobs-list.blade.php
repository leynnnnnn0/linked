<div >
   <section class="max-w-96 mx-auto mb-4">
       @include('livewire.includes.search-bar')
   </section>
    <section class="grid grid-cols-4 gap-5">
        @foreach($jobs as $job)
            @include('livewire.includes.job-container')
        @endforeach
    </section>
    <section class="mt-2">
        {{ $jobs->links() }}
    </section>
</div>
