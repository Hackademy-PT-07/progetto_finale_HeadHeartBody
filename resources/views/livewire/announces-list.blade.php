<div class="container">
    <section class="row">
        <div class="col-12">
            @if(count($announces))

            <section class="row d-flex justify-content-center mt-4">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle my-5">
                <a href="{{route('announces.index')}}">
                    <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.yourAds') }}</h2>
                </a>
            </div>
            <div class="col-1"></div>
            </section>

            @foreach($announces as $announce)
            <div class="d-flex border-bottom py-2 justify-content-between  align-items-center">
                <div>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 @if($announce->is_accepted === 0) text-danger @elseif($announce->is_accepted === null) text-warning @else text-success @endif" href="{{route('announces.show', $announce->id) }}">
                        <span class="fs-3 text-decoration-underline text-uppercase">{{$announce->title}}</span> <br>
                        <span>{{$announce->price}}€</span>
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
            <section class="row d-flex justify-content-center mt-4">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle">
                <a href="{{route('announces.index')}}">
                    <h2 class="text-capitalize fs-5 text-decoration-underline" id="firstTitle">{{__('ui.listnone')}}</h2>
                </a>
            </div>
            <div class="col-1"></div>
            </section>
            
            @endif
        </div>

    </section>
</div>
</div>