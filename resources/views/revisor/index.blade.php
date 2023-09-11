<x-main>

    <x-slot:pageName>{{ __('ui.revisor') }}</x-slot:pageName>

    <div class="container pt-5 mt-5">

        <div class="text-start py-4">
            <a class="btn btn-warning buttonStyle text-end" href="{{route('announces.index')}}">{{ __('ui.back') }}</a>
        </div>

        @if($announce_to_check)

        <div class="formBox">
            <section class="row">
                <section class="row d-flex justify-content-center">
                    <div class="col-1"></div>
                    <div class="col-10 text-center formTitle my-5">
                        <h2 class="text-center fw-bold fst-italic">{{$announce_to_check->title}}</h2>
                    </div>
                    <div class="col-1"></div>
                </section>

                <div class="col-0 col-xl-1"></div>
                <div class="col-12 col-xl-10">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            @if(count($announce_to_check->images))
                            @foreach($announce_to_check->images as $image)
                            <div class="carousel-item @if($image == $announce_to_check->images()->first()) active @endif">
                                <img style="width: 400px; height: 450px;" src="{{Storage::url($image->path)}}" class="d-block w-100 mb-1" alt="Foto Annuncio">

                                <span class="ps-2">Tags:</span> <br>
                                @foreach($image->labels as $label)
                                <span class="ps-4">{{$label}},</span>
                                @endforeach
                                <hr>
                                <div class="d-flex justify-content-between px-4 pb-2">
                                    <span>Adulti: <span class="{{$image->adult}}"></span></span>
                                    <span>Satira: <span class="{{$image->spoof}}"></span></span>
                                    <span>Medicina: <span class="{{$image->medical}}"></span></span>
                                    <span>Violenza: <span class="{{$image->violence}}"></span></span>
                                    <span>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></span>
                                </div>
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
            <section class="row py-5 mt-5">
                <div class="col-1 col-xl-1"></div>
                <div class="col-12 col-xl-7 text-center">
                    <h3 class="small fst-italic fs-2 pb-2">{{ __('ui.descAd') }}</h3>
                    <p class="fs-4">{{$announce_to_check->description}}</p>
                </div>
                <div class="col-12 col-xl-3 pt-5 pt-xl-0">
                    <span class="small fst-italic">{{ __('ui.priceAd') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->price}}€</p>
                    <span class="small fst-italic">{{ __('ui.pubFrom') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->user->name}} </p>
                    <span class="small fst-italic">{{ __('ui.pubOn') }}: </span>
                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->created_at->format("d/m/Y")}}</p>
                </div>
                <div class="col-1 col-xl-1"></div>
            </section>

            <section class="row px-5">
                <div class="col-12 d-flex justify-content-between pt-3 pb-5 px-5">
                    <form class="ps-3" action="{{route('revisor.accept_announce', ['announce'=>$announce_to_check])}}" method="POST">
                        @csrf
                        @method("PATCH")
                        <button type="submit" class="btn btn-lg btn-success shadow">{{ __('ui.accept') }}</button>
                    </form>

                    <form class="pe-3" action="{{route('revisor.reject_announce', ['announce'=>$announce_to_check])}}" method="POST">
                        @csrf
                        @method("PATCH")
                        <button type="submit" class="btn btn-lg btn-danger shadow">{{ __('ui.decline') }}</button>
                    </form>
                </div>
            </section>
        </div>

        @else
        <section class="row d-flex justify-content-center vh-100">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle my-5 fs-5">
                <p class="m-0">{{ __('ui.noRevAd') }} <a href="{{route('revisor.revised')}}">{{ __('ui.adRevised') }}</a></p>
            </div>
            <div class="col-1"></div>
        </section>

        @endif
    </div>

</x-main>