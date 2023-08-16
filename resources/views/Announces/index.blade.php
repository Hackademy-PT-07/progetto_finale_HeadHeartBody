<x-main>
    <x-slot:pageName>Annunci</x-slot:pageName>

    <div class="container mt-5 justify-content-center py-5">
        <div class="row align-item-center pt-5">
            <h2 class="text-center fw-bold fst-italic">Annunci</h2>

            <!-- Filter/Reorder section -->

            <div class="d-flex flex-wrap justify-content-between py-5">
                <div class="dropdown p-3 ps-5 p-md-0 ms-4 ms-md-0">
                    <button class="btn btn-warning dropdown-toggle buttonShadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riordina per categoria
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('announces.index')}}">Tutti</a></li>
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('announces.categoryOrder', $category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                @if(auth()->user())
                <a class="btn btn-warning buttonShadow" href="{{route('announces.livewire')}}">Inserisci annuncio</a>
                @endif
                </div>
                @if(count($announces) > 0)
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle buttonShadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riordina per data
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{$timeOrderDesc}}">Dal più recente</a></li>
                        <li><a class="dropdown-item" href="{{$timeOrderAsc}}">Dal meno recente</a></li>
                    </ul>
                </div>
                @else
                <a class="btn btn-warning buttonShadow" href="{{route('announces.index')}}">Elimina filtro</a>
                @endif
            </div>

            <!-- Filter/Reorder section end -->

            <!-- Announces card -->
            @if(count($announces) > 0)
            @foreach($announces as $announce)
            <div class="col-12 col-md-6 col-lg-4 pe-md-5 pt-5">
                <figure class="snip1418 card" style="width: 500px">
                    <img class="img-fluid border-bottom" style="height: 200px" src="{{Storage::url($announce->img)}}" alt="{{$announce->title}}"/>
                    <div class="add-to-cart">
                        <i class="ion-android-add"></i>
                        <span>Clicca per dettagli</span>
                    </div>
                    <figcaption>
                        <h3>{{ $announce->title }}</h3>

                        <p class="card-text text-warning text-decoration-underline">{{ $announce->category->name }}</p>

                        <p>{{ $announce->description }}</p>

                        <div class="price"><span>€{{ $announce->price }}</span></div>

                        <p class="card-footer"> Creato il: {{ $announce->created_at->format("d/m/Y") }} </p>
                    </figcaption>
                    <a href="{{route('announces.show', $announce->id) }}"></a>
                </figure>
            </div>
            @endforeach
            @else
            <div class="text-center fw-bold py-5 my-5">
                <p class="fs-4 fst-italic py-3">
                    Nessun annuncio presente per la categoria selezionata.
                </p>
            </div>
            @endif

            <!-- Announces card end -->
        
        </div>
</x-main>