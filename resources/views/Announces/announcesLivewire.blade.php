<x-main>
    <x-slot:pageName>{{ __('ui.createAnnounce') }}</x-slot:pageName>

    <!-- <div class="pt-5">
        <div class="d-flex align-items-center justify-content-center pt-5 pe-5">
            <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="80">
            <h1 id="logo">Presto.it</h1>
        </div>
    </div> -->

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