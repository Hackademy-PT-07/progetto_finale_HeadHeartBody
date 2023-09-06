<x-main>
    <x-slot:pageName>Pannello Admin</x-slot:pageName>
    <div class="row">
    <div class="col-12 mt-5 text-center">
      
        <div class="col-12 mt-5 mb-3 formTitle">

            <h2>{{ __('ui.adminTitle') }}</h2>
            
        </div>
    </div>
            <div class="row">
                <div class="col-6">
                    <div class="row align-items-center formBox mx-1 ps-5 pb-5">
                        <div class="col-10 d-flex flex-column justify-content-center" style="height: 400px;">
                            <livewire:category-form/>
                        </div>
                        <div class="col-10">
                            <livewire:category-list/>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row flex-column align-items-center formBox ms-4 me-2 pt-5">
                        <div class="col-10" style="height: 400px;">
                            <livewire:user-form/>
                        </div>
                        <div class="col-10 pb-5">
                            <livewire:user-list/>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
    
</x-main>