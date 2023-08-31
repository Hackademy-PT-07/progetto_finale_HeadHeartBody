<x-main>
    <x-slot:pageName>{{ __('ui.pageNameRev') }}</x-slot:pageName>      

    <div class="container mt-4 justify-content-center py-5">
        <div class="row pt-5">

            <div class="col-12 text-light">
                <h3 class="display-4 text-center">
                {{ __('ui.txtRevAd') }}:
                </h3>
            </div>

            <!-- Announces card -->

            @forelse($announces_revised as $announce)

            <div class="col-12 col-md-6 col-lg-4 md-5 pt-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px" src="{{Storage::url($announce->img)}}" class="card-img-top img-fluid" alt="{{$announce->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $announce->title }}</h5>
                        <span class="small">{{__('ui.category_'.$announce->category_id)}}</span>
                        <p class="card-text m-0 pt-1 text-center">{{ $announce->description }}</p>
                        <p class="card-text m-0 pt-1">{{ $announce->price }}€</p>
                        <div class="d-flex justify-content-end">
                        <form class="ps-3" action="{{route('revisor.announce_revised', ['announce'=>$announce])}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <button type="submit" class="btn btn-primary shadow my-2">{{ __('ui.revAd') }}</button>
                            </form>
                        </div>
                        <p class="card-footer fst-italic m-0 text-center"> {{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }} </p>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 vh-100">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">{{ __('ui.txtRevLong') }} <a href="{{route('revisor.index')}}" class="btn btn-secondary">{{ __('ui.revisorPage') }}</a></p>
                </div>
            </div>
            @endforelse
            {{$announces_revised->links()}}

            <!-- Announces card end -->

        </div>
</x-main>