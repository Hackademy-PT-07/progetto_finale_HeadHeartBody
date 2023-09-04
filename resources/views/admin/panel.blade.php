<x-main>
    <x-slot:pageName>Pannello Admin</x-slot:pageName>

    <div class="row pt-5 mt-5">
        <h2 class="text-center">Pannello Admin</h2>
        <div class="col-12 col-xl-6">
            <div class="row flex-column align-items-center">
                <h3 class="pt-5">Categorie:</h3>
                <div class="col-10 d-flex flex-column justify-content-center" style="height: 400px;">
                <livewire:category-form/>
                </div>
                <div class="col-10">
                <livewire:category-list/>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 py-5 pt-xl-0">
            <h3 class="pt-5">User:</h3>
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