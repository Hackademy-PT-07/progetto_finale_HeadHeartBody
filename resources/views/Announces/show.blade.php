<x-main>
    <x-slot:pageName>{{ __('ui.titleAd') }} {{$announce->title}}</x-slot:pageName>

    <div class="container pt-5 mt-5">

        <div class="text-start py-4">
            <a class="btn btn-warning buttonStyle text-end buttonStyle" href="{{route('announces.index')}}">{{ __('ui.back') }}</a>
        </div>

        <div class="formBox">

            <section class="row d-flex justify-content-center">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle my-5">
                    <a href="{{route('announces.index')}}">
                        <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{$announce->title}}</h2>
                    </a>
                </div>
                <div class="col-1"></div>
            </section>
            <section class="row pt-5">

                <div class="col-0 col-xl-1"></div>
                <div class="col-12 col-xl-10">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            @if(count($announce->images))
                            @foreach($announce->images as $image)
                            <div class="carousel-item @if($image == $announce->images()->first()) active @endif">
                                <img style="width: 400px; height: 450px;" src="{{Storage::url($image->path)}}" class="d-block w-100" alt="Foto Annuncio">
                            </div>
                            @endforeach
                            @else
                            <div class="carousel-item active">
                                <img style="width: 400px; height: 450px;" src="{{asset('img/non-disponibile.gif')}}" class="d-block w-100" alt="Foto Annuncio">
                            </div>
                            @endif

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="col-0 col-xl-1"></div>
                </div>
            </section>
            <section class="row py-5 mb-3">
                <div class="col-1 col-xl-0"></div>
                <div class="col-12 col-xl-7 text-center">
                    <h3 class="small fst-italic fs-2 pb-2">{{ __('ui.descAd') }}</h3>
                    <p class="fs-4">{{$announce->description}}</p>
                </div>
                <div class="col-12 col-xl-3 pt-5 pt-xl-0">
                    <span class="small fst-italic">{{ __('ui.priceAd') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce->price}}€</p>
                    <span class="small fst-italic">{{ __('ui.pubFrom') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce->user->name}} </p>
                    <span class="small fst-italic">{{ __('ui.pubOn') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce->created_at->format("d/m/Y")}}</p>
                </div>
                <div class="col-1 col-xl-0"></div>
            </section>

            <section class="row">
                <div class="col-12 text-center">
                    <p><span class="small">Contatta il venditore:</span><span class="fw-bold fst-italic ps-2">{{$announce->user->email}}</span></p>
                </div>
            </section>
        </div>
    </div>
</x-main>