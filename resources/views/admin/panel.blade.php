<x-main>
    <x-slot:pageName>Pannello Admin</x-slot:pageName>

    <div class="row pt-5 mt-5">
        <div class="col-6">
            <div class="row flex-column align-items-center">
                <div class="col-10 d-flex flex-column justify-content-center" style="height: 400px;">
                <livewire:category-form/>
                </div>
                <div class="col-10">
                <livewire:category-list/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row flex-column align-items-center">
                <div class="col-10" style="height: 400px;">
                    <livewire:user-form/>
                </div>
                <div class="col-10">
                    <livewire:user-list/>
                </div>
            </div>
        </div>
    </div>
</x-main>