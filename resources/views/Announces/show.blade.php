<x-main>
    <x-slot:pageName>Titolo {{$announce->title}}</x-slot:pageName>

    <div>

        <div class="pt-5 mt-5 mb-3 me-3 text-end">
            <a class="btn btn-warning buttonStyle text-end" href="{{route('announces.index')}}">Indietro</a>
        </div>

        <div class="col-12 formTitle mb-3">
            <div class=" ps-5 text-start"><h2 class="d-inline">{{$announce->title}}</h2>
            </div>
        </div>

        <div class="container col-11 formBox p-5">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-xl-8">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade me-5 pb-3">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{Storage::url($announce->img)}}" class="d-block w-100" alt="Foto Annuncio1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/300/150/?blur" class="d-block w-100" alt="Foto Annuncio2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/300/150?grayscale" class="d-block w-100" alt="Foto Annuncio3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-xl-4"> 
                    <span class="small fst-italic">Prezzo: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->price}}€</p>
                    <span class="small fst-italic">Pubblicato da: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->user->name}} </p>
                    <span class="small fst-italic">Pubblicato il: </span>
                        <p class="text-center fw-bold border-bottom pb-2">{{$announce->created_at->format("d/m/Y")}}</p>
                </div>
            </div>
            <div class="pt-5  text-center">
                <h3 class="small fst-italic fs-3">Descrizione</h3>
                <hr>
                <p class="fs-5 m-0">{{$announce->description}}</p>
            </div>
        </div>

</x-main>