<x-main>
    <x-slot:pageName>{{ __('ui.announces') }}</x-slot:pageName>

    <div class="container mt-4 justify-content-center py-5">

        <section class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10  search px-3">
                <x-search :category="$category" :searched="$searched" :order="$order" />
            </div>

            <div class="col-1"></div>

        </section>

        <section class="row d-flex justify-content-center">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle my-5">
                    <a href="{{route('announces.index')}}">
                        <h4 class="text-capitalize fs-2 text-decoration-underline" id="firstTitle">{{ __('ui.announces') }}</h4>
                    </a>
                </div>
                <div class="col-1"></div>
        </section>


        <!-- Announces card -->
        <section class="row">
            @if(count($announces))
            @foreach($announces as $announce)
            <div class="col-12 col-md-6 col-lg-4 py-5 d-flex justify-content-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('announces.show', $announce)}}">
                        <div class="card cardAds" style="width: 20rem;">
                            @if(count($announce->images))
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                            @else
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" src="{{asset('img/non-disponibile.gif')}}" alt="Logo">
                            @endif
                            <div class="card-body p-0">
                                <div class="card-title">
                                    <h5 class="text-center">{{ $announce->title }}</h5>
                                </div>
                                <div class="d-flex justify-content-end text-white fst-italic pe-3 pt-2">
                                    <span>{{__('ui.category_'.$announce->category->id)}}</span>
                                </div>
                                <p class="card-text m-0 py-3 text-center fs-3 text-white">{{ $announce->price }}€</p>
                                <p class="card-footer fst-italic m-0 d-flex justify-content-between text-white"><span><span class="small">{{ __('ui.createAt') }}:</span> {{ $announce->created_at->format("d/m/Y") }}</span> <span><span class="small">{{__('ui.createdBy')}}:</span> {{$announce->user->name}}</span> </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            {{$announces->links()}}
            @else
            <section class="row d-flex justify-content-center vh-100">
                <div class="col-3"></div>
                <div class="col-6 text-center formTitle my-5">
                    <p class="m-0 fs-3">{{__('ui.noAdfound')}}!</a></p>
                </div>
                <div class="col-3"></div>
            </section>

            @endif
        </section>

        <!-- Announces card end -->
    </div>
</x-main>