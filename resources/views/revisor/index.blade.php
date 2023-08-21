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
                    qui va l'annuncio                    
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