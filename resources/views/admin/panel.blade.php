<x-main>
    <x-slot:pageName>{{ __('ui.adminTitle') }}</x-slot:pageName>

    <div class="container mt-5 pt-5">
        <section class="row d-flex justify-content-center my-3">
                <div class="col-12 text-center formTitle">
                    <a href="{{route('announces.index')}}">
                        <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.adminTitle') }}</h2>
                    </a>
                </div>
            </section>


            <section class="row formBox mx-xl-5 mt-5 py-5">
                <div class="col-12 col-xl-6">

                <section class="row d-flex justify-content-center my-3">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle">
                    <a href="{{route('announces.index')}}">
                        <h3 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.categorySection') }}:</h3>
                    </a>
                </div>
                <div class="col-1"></div>
            </section>
                
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

                <section class="row d-flex justify-content-center my-3">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle">
                    <a href="{{route('announces.index')}}">
                        <h3 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.userSection') }}:</h3>
                    </a>
                </div>
                <div class="col-1"></div>
            </section>
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