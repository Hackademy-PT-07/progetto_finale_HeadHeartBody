<x-main>
    <x-slot:pageName>Annunci</x-slot:pageName>
    
    <div class="container mt-4 justify-content-center py-5">
        <div class="row pt-5">
            <div class="container d-inline-flex">
                <div class="col-3">
                    <img class="immagine" src="https://www.farolloefalpala.it/wp-content/uploads/2017/07/megafono_urlo.png" alt="megafono">
                </div>
                <div class="col-9 formTitle">
                    <div class="text-center"><h2 class="d-inline">Annunci</h2>
                    </div>
                </div>
        </div>
            <!-- Filter/Reorder section -->
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-5">
                <div class="dropdown p-3 ps-5 p-md-0">
                    <button class="btn btn-warning dropdown-toggle buttonStyle mb-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riordina per categoria
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('announces.index')}}">Tutti</a></li>
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('announces.categoryOrder', $category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div >
                @if(auth()->user())
                <a class="btn btn-warning buttonStyle mb-3" href="{{route('announces.livewire')}}">Inserisci annuncio</a>
                @endif
                </div>
                @if(count($announces) > 0)
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle buttonStyle mb-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Riordina per data
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{$timeOrderDesc}}">Dal più recente</a></li>
                        <li><a class="dropdown-item" href="{{$timeOrderAsc}}">Dal meno recente</a></li>
                    </ul>
                </div>
                @else
                <a class="btn btn-warning buttonStyle" href="{{route('announces.index')}}">Elimina filtro</a>
                @endif
            </div>

            <!-- Filter/Reorder section end -->

            <!-- Announces card -->
            
            @if(count($announces) > 0)
            @foreach($announces as $announce)
                <div class="col-12 col-md-6 col-lg-4 md-5 pt-3 d-flex justify-content-center">
                    <figure class="snip1418 card">
                        <img class="img-fluid" style="height: 240px" src="{{Storage::url($announce->img)}}" alt="{{$announce->title}}"/>
                            <div class="add-to-cart">
                                <i class="ion-android-add"></i>
                                <span>Clicca per dettagli</span>
                            </div>
                        <figcaption class="snip1418Body">
                            <h3 class="text-center text-decoration-underline p-2 purple card" id="title">{{ $announce->title }}</h3>

                            <p class="card-text text-warning fw-semibold mb-2 text-end fs-6">{{ $announce->category->name }}</p>

                            <p class="hidden">{{ $announce->description }}</p>

                            <div class="price text-center"><span>€{{ $announce->price }}</span></div>

                            <p class="card-footer fst-italic"> Creato il: {{ $announce->created_at->format("d/m/Y") }} </p>
                        </figcaption>
                        
                        <a href="{{route('announces.show', $announce->id) }}"></a>
                    </figure>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead"> Non ci sono annunci per questa ricerca</p>
                    </div>
                </div>
            @endforelse
            @else
            <div class="text-center buttonStyle py-3 my-5" style="text-shadow: 5px 5px 10px white";">
                <p class="fs-2 text-decoration-underline purple">
                    Nessun annuncio per la categoria selezionata.
                </p>
            </div>
            @endif

            <!-- Announces card end -->
        
        </div>
</x-main>
