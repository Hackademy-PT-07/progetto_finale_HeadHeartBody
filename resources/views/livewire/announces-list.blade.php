<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center mt-4 mb-3 formTitle"><h2>{{ __('ui.yourAds') }}</h2></div>
            <div class="formBox p-5 mx-4">
                @foreach($announces as $announce)
                    <div class="d-flex border-bottom py-2 justify-content-between  align-items-center">
                        <div>
                            <a class="link-offset-2 link-underline link-underline-opacity-0 text-black" href="{{route('announces.show', $announce->id) }}">
                                <span>{{$announce->title}}</span>
                                <span class="ps-2"> - {{$announce->price}}€</span>
                                <span class="ps-2"> - ({{$announce->created_at->format("d/m/Y")}})</span>
                            </a>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editAnnounce({{$announce->id}})">{{ __('ui.modAd') }}</button>
                            <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteAnnounce({{$announce->id}})">{{ __('ui.deleteAd') }}</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>