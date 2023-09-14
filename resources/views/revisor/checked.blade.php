<x-main>
    <x-slot:pageName>{{ __('ui.pageNameRev') }}</x-slot:pageName>

    <div class="container pt-5 mt-5">

        <section class="row d-flex justify-content-center">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle my-5">
                <a href="{{route('announces.index')}}">
                    <h4 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle"> {{ __('ui.txtRevAd') }}:</h4>
                </a>
            </div>
            <div class="col-1"></div>
        </section>
        <div class="row">

            <!-- Announces card -->

            @forelse($announces_revised as $announce)

            <div class="col-12 col-md-6 col-lg-4 my-5 d-flex justify-content-center">
                    <div class="card cardAds" style="width: 20rem;">
                        @if(count($announce->images))
                        <div class="position-relative">
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                            <div class="position-absolute top-0 start-0">@if($announce->is_accepted == 0) <button class="btn btn-danger">Rifiutato</button> @endif</div>
                        </div>
                        @else
                        <div class="position-relative">
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" src="{{asset('img/non-disponibile.gif')}}" alt="Logo">
                            <div class="position-absolute top-0 start-0">@if($announce->is_accepted == 0) <button class="btn btn-danger">Rifiutato</button> @endif</div>
                        </div>
                        @endif
                        <div class="card-body p-0">
                            <div class="card-title">
                                <h5 class="text-center">{{ $announce->title }}</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <form class="ps-3" action="{{route('revisor.announce_revised', ['announce'=>$announce])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="btn btn-primary shadow my-2">{{ __('ui.revAd') }}</button>
                                </form>
                                <span class="text-white fst-italic pe-3 pt-2">{{__('ui.category_'.$announce->category->id)}}</span>
                            </div>
                            <p class="card-text m-0 py-3 text-center fs-3 text-white">{{ $announce->price }}€</p>
                            <p class="card-footer fst-italic m-0 d-flex justify-content-between text-white"><span>{{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }}</span> <span>{{$announce->user->name}}</span> </p>
                        </div>
                    </div>
            </div>

            @empty

            <section class="row pt-5 mt-5">
                <div class="col-12">
                    <p class="text-center">{{ __('ui.txtRevLong') }} <a href="{{route('revisor.index')}}" class="btn btn-secondary">{{ __('ui.revisorPage') }}</a></p>
                </div>
            </section>

            @endforelse
            {{$announces_revised->links()}}

            <!-- Announces card end -->
        </div>
</x-main>