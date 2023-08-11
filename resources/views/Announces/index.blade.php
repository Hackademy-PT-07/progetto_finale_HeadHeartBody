<x-main>
    <x-slot:pageName>Annunci</x-slot:pageName>

    <!-- <div class="pt-5 mt-5 text-center">
        <h2 class="pt-4 fw-bold">Annunci</h2>
    </div> -->

    <div class="container mt-5 justify-content-center py-5">
        <div class="row align-item-center pt-5">
            <h2 class="text-center fw-bold fst-italic">Annunci</h2>
            <div class="d-flex justify-content-between py-5">
                <div>
                <div class="dropdown">
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
                </div>
                <div>
                @if(auth()->user())
                <a class="btn btn-warning buttonShadow" href="{{route('announces.livewire')}}">Inserisci annuncio</a>
                @endif
                </div>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle buttonShadow" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riordina per data
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('announces.timeOrderAsc')}}">Dal più recente</a></li>
                        <li><a class="dropdown-item" href="{{route('announces.timeOrderDesc')}}">Dal meno recente</a></li>
                    </ul>
                </div>
            </div>
            @foreach($announces as $announce)
            <div class="col-12 col-md-6 col-xl-4 pt-5">
                <figure class="snip1418">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg" alt="sample85" />
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

        </div>
</x-main>