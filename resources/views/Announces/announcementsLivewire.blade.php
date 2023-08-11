<x-main>
    <x-slot:pageName>Crea Annuncio</x-slot:pageName>

    <div class="pt-5">
        <div class="d-flex align-items-center justify-content-center pt-5 pe-5">
            <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="80">
            <h1 id="logo">Presto.it</h1>
        </div>
    </div>

    <div class="container vh-100">
        <div class="pb-3 pt-0 text-end">
            <a class="btn btn-warning buttonShadow" href="{{route('announces.index')}}">Visualizza tutti gli annunci</a>
         </div>
        <div class="row pt-3">
            <div class="col-12 col-xl-6">
                <livewire:announces-form>
            </div>
            <div class="col-12 col-xl-6">
                <livewire:announces-list>
            </div>
        </div>
    </div>
</x-main>