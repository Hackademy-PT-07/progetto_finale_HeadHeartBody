<x-main>
    <x-slot:pageName>{{ __('ui.announces') }}</x-slot:pageName>

    <div class="d-flex justify-content-center mt-3 pt-5 search">


    <form action="{{route('announces.filter')}}" class="row d-flex justify-content-center align-items-center ms-5 ps-5" method="GET">

        <div class="col-12 col-md-3">
        <label for="category" class="form-label"></label>
        <select class="form-select select-bg" aria-label="Default select example" id="category" name="category">
            <option  selected @if($category) value="{{key($category)}}" @else value="" @endif>
                @if($category) {{$category[key($category)]}} @else {{__('ui.categories')}} @endif</option>
            @if($category)<option value="">{{ __('ui.filterOff') }}</option>@endif
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{__('ui.category_'.$category->id)}}</option>
            @endforeach
        </select>
        </div>

        <div class="col-12 col-md-3">
            <label for="searched" class="form-label"></label>
            <input name="searched" class="form-control select-bg" list="datalistOptions" id="searched" name="searched" type="search" placeholder="{{ __('ui.search') }}" @if($searched) value="{{$searched}}" @endif>

        </div>

        <div class="col-12 col-md-3">
            <label for="order" class="form-label"></label>
            <select class="form-select select-bg" aria-label="Default select example" id="order" name="order">
            <option  selected @if($order) value="{{key($order)}}" @else value="" @endif>
                    @if($order) {{$order[key($order)]}} @else {{ __('ui.reorder') }} @endif</option>
                @if($order)<option value="">{{ __('ui.filterOff') }}</option>@endif
                <option value="Desc">{{ __('ui.mostRecent') }}</option>
                <option value="Asc">{{ __('ui.older') }}</option>
                <option value="PriceDesc">{{ __('ui.moreExpensive') }}</option>
                <option value="PriceAsc">{{ __('ui.lessExpensive') }}</option>
            </select>

        </div>

        <div class="col-12 col-md-3">
            <button class="btn btn-warning mt-4"> {{ __('ui.search') }} </button>
        </div>
    </form>

</div>

    <div class="container mt-4 justify-content-center py-5">
        <div class="row pt-5">
            <div class="container d-inline-flex">
                <div class="col-3">
                    <img class="immagine" src="https://www.farolloefalpala.it/wp-content/uploads/2017/07/megafono_urlo.png" alt="megafono">
                </div>
                <div class="col-9 formTitle">
                    <div class="text-center">
                        <h2 class="d-inline">{{ __('ui.announces') }}</h2>
                    </div>
                </div>
            </div>
            <!-- Filter/Reorder section -->
            <!-- <div class="d-flex flex-wrap justify-content-between align-items-start pb-5">

                <form action="{{route('announces.filter')}}" class="row d-flex justify-content-center align-items-center ms-5 ps-5" method="GET">

                    <div class="col-12 col-md-3">
                        <label for="category" class="form-label"></label>
                        <select class="form-select select-bg" aria-label="Default select example" id="category" name="category">
php                            <option selected @if($category) value="{{key($category)}}" @else value="" @endif>
                                @if($category) {{$category[key($category)]}} @else Categorie @endif</option>
                            @if($category)<option value="">{{ __('ui.filterOff') }}</option>@endif
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-md-3">
                        <label for="searched" class="form-label"></label>
                        <input name="searched" class="form-control select-bg" list="datalistOptions" id="searched" name="searched" type="search" placeholder="Cerca" @if($searched) value="{{$searched}}" @endif>

                    </div>

                    <div class="col-12 col-md-3">
                        <label for="order" class="form-label"></label>
                        <select class="form-select select-bg" aria-label="Default select example" id="order" name="order">
                            <option selected @if($order) value="{{key($order)}}" @else value="" @endif>
                                @if($order) {{$order[key($order)]}} @else {{ __('ui.reorder') }} @endif</option>
                            @if($order)<option value="">{{ __('ui.filterOff') }}</option>@endif
                            <option value="Desc">{{ __('ui.mostRecent') }}</option>
                            <option value="Asc">{{ __('ui.older') }}</option>
                            <option value="PriceDesc">{{ __('ui.moreExpensive') }}</option>
                            <option value="PriceAsc">{{ __('ui.lessExpensive') }}</option>
                        </select>

                    </div>

                    <div class="col-12 col-md-3">
                        <button class="btn btn-warning mt-4"> {{ __('ui.search') }} </button>
                    </div>
                </form>

                <div>
                    @if(auth()->user())
                    <a class="btn btn-warning buttonStyle mb-3" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
                    @endif
                </div>
            </div> -->

            <!-- Filter/Reorder section end -->

            <!-- Announces card -->

            @forelse($announces as $announce)
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
            @empty
            <div class="col-12 vh-100">
                <div class="alert alert-warning my-5">
                    <p class="lead"> {{__('ui.noAdfound')}} </p>
                </div>
            </div>
            @endforelse
            {{$announces->links()}}

            <!-- Announces card end -->

        </div>
</x-main>