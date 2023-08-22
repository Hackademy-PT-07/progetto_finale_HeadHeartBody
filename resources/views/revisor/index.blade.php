<x-main>

    <x-slot:pageName>Revisore</x-slot:pageName>

    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{$announcement_to_check ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare"}}
                </h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    @if(count($announces) > 0)
                    @foreach($announces as $announce)
                    <div class="col-12 col-md-4 col-lg-4 pe-md-5 pt-3 d-flex">
                        <figure class="snip1418 card" style="width: 500px">
                            <img class="img-fluid border-bottom" style="height: 200px" src="{{Storage::url($announce->img)}}" alt="{{$announce->title}}" />
                            <div class="add-to-cart">
                                <i class="ion-android-add"></i>
                                <span>Clicca per dettagli</span>
                            </div>
                            <figcaption>
                                <h3 class="fw-bold text-center text-decoration-underline">{{ $announce->title }}</h3>

                                <p class="card-text text-warning fw-semibold text-decoration-underline mb-2 text-end fs-6">{{ $announce->category->name }}</p>

                                <p style="height:120px">{{ $announce->description }}</p>

                                <div class="price text-center"><span>€{{ $announce->price }}</span></div>

                                <p class="card-footer bg-warning fst-italic"> Creato il: {{ $announce->created_at->format("d/m/Y") }} </p>
                            </figcaption>
                            <a href="{{route('announces.show', $announce->id) }}"></a>
                        </figure>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center fw-bold py-5 my-5" style="text-shadow: 5px 5px 10px white" ;">
                        <p class="fs-2 fst-italic text-decoration-underline py-3 purple">
                            Nessun annuncio per la categoria selezionata.
                        </p>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                            @csrf
                            @method("PATCH")
                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 text-end">
                        <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                            @csrf
                            @method("PATCH")
                            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</x-main>