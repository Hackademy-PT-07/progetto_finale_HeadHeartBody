<x-main>

    <x-slot:pageName>{{ __('ui.revisor') }}</x-slot:pageName>

    <div class="container pt-5 mt-4">
        <div class="row">

            @if($announce_to_check)

            <div class="col-12 text-light">
                <h3 class="display-4 text-center">
                    {{ __('ui.txtRevAd') }}:
                </h3>
            </div>
            <div class="col-12">
                <div>
                    <div>

                        <div class="pt-5 mt-5 mb-3 me-3 text-end">
                            <a class="btn btn-warning buttonStyle text-end" href="{{route('announces.index')}}">{{ __('ui.back') }}</a>
                        </div>

                        <div class="col-12 formTitle mb-3">
                            <div class=" ps-5 text-start">
                                <h2 class="d-inline">{{$announce_to_check->title}}</h2>
                            </div>
                        </div>

                        <div class="container col-11 formBox p-5">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-8">
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade me-5 pb-3">
                                        <div class="carousel-inner">
                                            @foreach($announce_to_check->images as $image)
                                            <div class="carousel-item @if($image == $announce_to_check->images()->first()) active @endif">
                                                <img style="width: 400px; height: 400px;" src="{{Storage::url($image->path)}}" class="d-block w-100" alt="Foto Annuncio1">
                                            </div>
                                            @endforeach
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="col-12 mt-5 pt-5">
                                            <div class="pt-5">
                                                <h5>
                                                    <span>Tags:</span> <br>
                                                    @foreach($image->labels as $label)
                                                    <span>{{$label}},</span>
                                                    @endforeach
                                                    <hr>
                                                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                                    <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                                    <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                                    <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                                    <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-4">
                                    <span class="small fst-italic">{{ __('ui.priceAd') }}: </span>
                                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->price}}€</p>
                                    <span class="small fst-italic">{{ __('ui.categories') }}: </span>
                                    <p class="text-center fw-bold border-bottom pb-2">{{__('ui.category_'.$announce_to_check->category_id)}}</p>
                                    <span class="small fst-italic">{{ __('ui.pubFrom') }}: </span>
                                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->user->name}} </p>
                                    <span class="small fst-italic">{{ __('ui.pubOn') }}: </span>
                                    <p class="text-center fw-bold border-bottom pb-2">{{$announce_to_check->created_at->format("d/m/Y")}}</p>
                                </div>
                            </div>
                            <div class="pt-5  text-center">
                                <h3 class="small fst-italic fs-3">{{ __('ui.descAd') }}</h3>
                                <hr>
                                <p class="fs-5 m-0">{{$announce_to_check->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between py-5 px-5">
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
                    </div>
                </div>
                @else
                <div class="col-12 vh-100">
                    <h3 class="display-4 text-center">
                        {{ __('ui.noRevAd') }} <a href="{{route('revisor.revised')}}" class="btn btn-secondary">{{ __('ui.adRevised') }}</a>
                    </h3>
                </div>

                @endif
            </div>
        </div>
</x-main>