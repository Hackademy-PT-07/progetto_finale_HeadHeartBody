<div class="container">
    <section class="row">
        <div class="col-12">
            @if(count($announces))
            <h2 class="text-center fw-bold fst-italic">{{ __('ui.yourAds') }}</h2>

            @foreach($announces as $announce)
            <div class="d-flex border-bottom py-2 justify-content-between  align-items-center">
                <div>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 @if($announce->is_accepted == 0) text-danger @endif" href="{{route('announces.show', $announce->id) }}">
                        <span>{{$announce->title}}</span>
                        <span class="px-2">{{$announce->price}}€</span>
                        <span>- {{$announce->created_at->format("d/m/Y")}}</span>
                    </a>
                </div>
                <div class="d-flex">
                    <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editAnnounce({{$announce->id}})"><i class="bi bi-pen"></i></button>
                    <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteAnnounce({{$announce->id}})"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
            @endforeach

            @else

            <h2 class="text-center fw-bold fst-italic py-5">Non c'e nessun annuncio inserito da te.. Inizia subito compilando i campi qui sopra..</h2>
            
            @endif
        </div>

    </section>
</div>
</div>