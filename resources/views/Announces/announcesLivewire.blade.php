<x-main>
    <x-slot:pageName>{{ __('ui.createAnnounce') }}</x-slot:pageName>


    <div class="container py-5 mt-4 formBox">
        <section class="row pt-3 d-flex justify-content-center align-items-center">
            <div class="col-12 col-xl-6">
                <livewire:announces-form>
            </div>
            <div class="col-12 col-xl-6 d-none d-xl-block ">
                <img class="img-fluid mt-5" style="border-radius: 16px; width: 600px;" src="https://www.sicurezzanazionale.gov.it/sisr.nsf/wp-content/uploads/2015/11/scrivi-per-noi-.jpg" alt="foto slogan">
            </div>
        </section>
        <section class="row pt-3 d-flex justify-content-center align-items-center">
            <div class="col-12">
                <livewire:announces-list>
            </div>
        </section>
        <div class="pb-3 mb-5 text-center">
            <a class="btn btn-warning buttonStyle" href="{{route('announces.index')}}">{{ __('ui.allAnnounces') }}</a>
        </div>
    </div>
</x-main>