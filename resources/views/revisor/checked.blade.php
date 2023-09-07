<x-main>
    <x-slot:pageName>{{ __('ui.pageNameRev') }}</x-slot:pageName>

    <div class="container pt-5 mt-5">
        <div class="row">

            <div class="col-12 pt-2">
                <h3 class="text-center fw-bold fst-italic">
                    {{ __('ui.txtRevAd') }}:
                </h3>
            </div>

            <!-- Announces card -->

            @forelse($announces_revised as $announce)

            <div class="col-12 col-md-6 col-lg-4 pt-4 d-flex justify-content-center">
                <a href="{{route('announces.index')}}">
                    <div class="card" style="width: 22rem;">
                        <div class="card-title text-center">
                            <p class="m-0 py-2">{{$announce->user->name}}</p>
                        </div>
                        @if(count($announce->images))
                        <div class="position-relative">
                        <img style="height: 250px; width: 100%" class="img-fluid border-top border-bottom" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                        <div class="position-absolute top-0 end-0">@if($announce->is_accepted == 0) <button class="btn btn-danger">Rifiutato</button>  @endif</div>
                        </div>
                        @else
                        <div class="position-relative">
                        <img style="height: 250px; width: 100%" class="img-fluid border-top border-bottom" src="{{asset('img/non-disponibile.gif')}}" alt="Logo">
                        <div class="position-absolute top-0 end-0">@if($announce->is_accepted == 0) <button class="btn btn-danger">Rifiutato</button>  @endif</div>
                        </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $announce->title }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <form class="ps-3" action="{{route('revisor.announce_revised', ['announce'=>$announce])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button type="submit" class="btn btn-primary shadow my-2">{{ __('ui.revAd') }}</button>
                                </form>
                                <span>{{__('ui.category_'.$announce->category->id)}}</span>
                            </div>
                            <p class="card-text m-0 py-3 text-center">{{ $announce->price }}€</p>
                            <p class="card-footer fst-italic m-0 text-center"> {{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }} </p>
                        </div>
                    </div>
                </a>
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