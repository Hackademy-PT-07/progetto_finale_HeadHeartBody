<x-main>
    <x-slot:pageName>Pannello Admin</x-slot:pageName>

    <div class="col-12 mt-5 pt-5">
            <h2 class="text-center fw-bold fst-italic py-5">{{ __('ui.adminTitle') }}</h2>


            <section class="row">
                <div class="col-12 col-xl-6">
                <h3 class="fw-bold fst-italic py-3 p-xl-0 pt-xl-3">Sezione Categorie:</h3>
                    <div class="row justify-content-center">
                        <div class="col-10 pt-5 py-xl-5">
                            <livewire:category-form/>
                        </div>
                        <div class="col-10 pt-5 mt-xl-5">
                            <livewire:category-list/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                <h3 class="fw-bold fst-italic py-3 pt-5 p-xl-0">Sezione Utenti:</h3>
                    <div class="row justify-content-center">
                        <div class="col-10 pt-5">
                            <livewire:user-form/>
                        </div>
                        <div class="col-10 pt-5 pt-xl-4">
                            <livewire:user-list/>
                        </div>
                    </div>
                </div>
            </section>
            
    </div>
    
</x-main>