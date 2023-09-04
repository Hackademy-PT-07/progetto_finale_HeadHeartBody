<x-main>
    <x-slot:pageName>{{ __('ui.titleAd') }} {{$announce->title}}</x-slot:pageName>

    
    <div>

        <div class="pt-5 mt-5 mb-3 me-3 text-end">
            <a class="btn btn-warning buttonStyle text-end" href="{{route('announces.index')}}">{{ __('ui.back') }}</a>
        </div>

        <div class="col-12 formTitle mb-3">
            <div class=" ps-5 text-start"><h2 class="d-inline">{{$announce->title}}</h2>
            </div>
        </div>

        <div class="container col-11 formBox p-5">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-xl-8">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade me-5 pb-3">
                        <div class="carousel-inner">
                            @foreach($announce->images as $image)
                            <div class="carousel-item @if($image == $announce->images()->first()) active @endif">
                                <img style="width: 400px; height: 400px;" src="{{Storage::url($image->path)}}" class="d-block w-100" alt="Foto Annuncio1">
                            </div>
                            @endforeach
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
                </div>
                <div class="col-12 col-xl-4"> 
                    <span class="small fst-italic">{{ __('ui.priceAd') }}: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->price}}€</p>
                    <span class="small fst-italic">{{ __('ui.pubFrom') }}: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->user->name}} </p>
                    <span class="small fst-italic">{{ __('ui.pubOn') }}: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->created_at->format("d/m/Y")}}</p>
                </div>
            </div>
            <div class="pt-5  text-center">
                <h3 class="small fst-italic fs-3">{{ __('ui.descAd') }}</h3>
                <hr>
                <p class="fs-5 m-0">{{$announce->description}}</p>
            </div>
        </div>

</x-main>