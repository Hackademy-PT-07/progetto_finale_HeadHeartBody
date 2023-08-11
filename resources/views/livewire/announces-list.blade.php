<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="fst-italic pb-1">I tuoi annunci</h2>
            @foreach($announces as $announce)
            <div class="d-flex border-bottom border-secondary py-2 justify-content-between align-items-center">
                <div>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-black" href="{{route('announces.show', $announce->id) }}">
                        <span>.{{$announce->title}}</span>
                        <span class="ps-2"> - {{$announce->price}}€</span>
                        <span class="ps-2"> - ({{$announce->created_at->format("d/m/Y")}})</span>
                    </a>
                </div>
                <div class="d-flex">
                    <button class="btn btn-sm btn-primary ms-3" wire:click="editAnnounce({{$announce->id}})">Modifica</button>
                    <button class="btn btn-sm btn-danger ms-3" wire:click="deleteAnnounce({{$announce->id}})">Elimina</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>