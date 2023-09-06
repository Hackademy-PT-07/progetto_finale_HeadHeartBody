<x-main>
    <x-slot:pageName>{{ __('ui.createAnnounce') }}</x-slot:pageName>


    <div class="container py-5 mt-4">
        <div class="row pt-3">
            <div class="col-12 col-xl-6">
                <livewire:announces-form>
            </div>
            
            <div class="col-12 col-xl-6">
                <livewire:announces-list>
            </div>
        </div>
        <div class="pb-3 mb-5 text-center">
            <a class="btn btn-warning buttonStyle" href="{{route('announces.index')}}">{{ __('ui.allAnnounces') }}</a>
        </div>
    </div>
</x-main>