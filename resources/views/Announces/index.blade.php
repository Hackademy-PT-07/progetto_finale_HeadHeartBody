<x-main>
    <x-slot:pageName>{{ __('ui.announces') }}</x-slot:pageName>

    <div class="container mt-4 justify-content-center py-5">

        <section class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10">
                <x-search :category="$category" :searched="$searched" :order="$order" />
            </div>

            <div class="col-1"></div>

        </section>

        <section class="row py-5">
            <div class="col-12">
                <h2 class="text-center fw-bold fst-italic">{{ __('ui.announces') }}</h2>
            </div>
        </section>

        <!-- Announces card -->
        <section class="row">
            @if(count($announces))
            @foreach($announces as $announce)
            <div class="col-12 col-md-6 col-lg-4 mt-5 pt-5 d-flex justify-content-center">
                <a href="{{route('announces.show', $announce)}}">
                    <div class="card" style="width: 22rem;">
                        <div class="card-title text-center">
                        <p class="m-0 py-2">{{$announce->user->name}}</p>
                        </div>
                        @if(count($announce->images))
                        <img style="height: 250px; width: 100%" class="img-fluid border-top border-bottom" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                        @else
                        <img style="height: 250px; width: 100%" class="img-fluid border-top border-bottom" src="{{asset('img/non-disponibile.gif')}}" alt="Logo">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $announce->title }}</h5>
                            <div class="d-flex justify-content-end">
                                <span>{{__('ui.category_'.$announce->category->id)}}</span>
                            </div>
                            <p class="card-text m-0 py-3 text-center">{{ $announce->price }}€</p>
                            <p class="card-footer fst-italic m-0 text-center"> {{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }} </p>
                        </div>
                    </div>
<<<<<<< HEAD
                </a>
=======
                    <figcaption class="snip1418Body">
                        <h3 class="text-center text-decoration-underline p-2 purple card" id="title">{{ $announce->title }}</h3>

                        <p class="card-text text-warning fw-semibold mb-2 text-end fs-6">{{__('ui.category_'.$announce->category_id)}}</p>

                        <p class="hidden">{{ $announce->description }}</p>

                        <div class="price text-center"><span>€{{ $announce->price }}</span></div>

                        <p class="card-footer mb-4 fst-italic"> {{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }} </p>
                    </figcaption>

                    <a href="{{route('announces.show', $announce->id) }}"></a>
                </figure>
>>>>>>> e6bb058095eddd83526ed375451c81e2a4c4cdae
            </div>
            @endforeach
            {{$announces->links()}}
            @else
            <div class="col-12 vh-100">
                <div class="alert alert-warning my-5">
                    <p class="lead"> {{__('ui.noAdfound')}} </p>
                </div>
            </div>
            @endif
        </section>

        <!-- Announces card end -->
    </div>
</x-main>