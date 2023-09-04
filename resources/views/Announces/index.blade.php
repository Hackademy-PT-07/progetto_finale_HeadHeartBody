<x-main>
    <x-slot:pageName>{{ __('ui.announces') }}</x-slot:pageName>

    <x-search :category="$category" :searched="$searched" :order="$order"/>

    <div class="container mt-4 justify-content-center py-3">
        <div class="row">
            <div class="container col-12 d-inline-flex mt-0">
                <div class="col-3 text-center">
                    <img class="immagine" src="https://png.pngtree.com/png-clipart/20220926/ourmid/pngtree-3d-red-portable-speaker-megaphone-announcement-and-promotion-png-image_6217784.png" alt="megafono">
                </div>
                <div class="col-9 formTitle mt-3">
                    <div class="text-center">
                        <h2 class="d-inline">{{ __('ui.announces') }}</h2>
                    </div>
                </div>
            </div>
            

            <!-- Announces card -->
            @if(count($announces))
            @foreach($announces as $announce)
            <div class="col-12 col-md-6 col-lg-4 md-5 pt-3 d-flex justify-content-center">
                <figure class="snip1418 card">
                    <img class="img-fluid" style="height: 240px" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                    <div class="add-to-cart">
                        <i class="ion-android-add"></i>
                        <span>{{ __('ui.clickDetails') }}</span>
                    </div>
                    <figcaption class="snip1418Body">
                        <h3 class="text-center text-decoration-underline p-2 purple card" id="title">{{ $announce->title }}</h3>

                        <p class="card-text text-warning fw-semibold mb-2 text-end fs-6">{{__('ui.category_'.$announce->category_id)}}</p>

                        <p class="hidden">{{ $announce->description }}</p>

                        <div class="price text-center"><span>€{{ $announce->price }}</span></div>

                        <p class="card-footer fst-italic"> {{ __('ui.createAt') }}: {{ $announce->created_at->format("d/m/Y") }} </p>
                    </figcaption>

                    <a href="{{route('announces.show', $announce->id) }}"></a>
                </figure>
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

            <!-- Announces card end -->

        </div>
</x-main>