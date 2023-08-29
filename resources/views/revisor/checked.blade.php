<x-main>
    <x-slot:pageName>Annunci Revisionati</x-slot:pageName>

    <div class="container mt-4 justify-content-center py-5">
        <div class="row pt-5">

            <div class="col-12 text-light">
                <h3 class="display-4 text-center">
                    Ecco gli annunci da te revisionati:
                </h3>
            </div>

            <!-- Announces card -->

            @forelse($announces_revised as $announce)

            <div class="col-12 col-md-6 col-lg-4 md-5 pt-3 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px" src="{{Storage::url($announce->img)}}" class="card-img-top img-fluid" alt="{{$announce->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $announce->title }}</h5>
                        <span class="small">{{ $announce->category->name }}</span>
                        <p class="card-text m-0 pt-1 text-center">{{ $announce->description }}</p>
                        <p class="card-text m-0 pt-1">{{ $announce->price }}€</p>
                        <div class="d-flex justify-content-end">
                        <form class="ps-3" action="{{route('revisor.announce_revised', ['announce'=>$announce])}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <button type="submit" class="btn btn-primary shadow my-2">Revisiona</button>
                            </form>
                        </div>
                        <p class="card-footer fst-italic m-0 text-center"> Creato il: {{ $announce->created_at->format("d/m/Y") }} </p>
                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 vh-100">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Nessun annuncio da te revisionato.. inizia a revisionare annunci dalla <a href="{{route('revisor.index')}}" class="btn btn-secondary">Pagina Revisore</a></p>
                </div>
            </div>
            @endforelse
            {{$announces_revised->links()}}

            <!-- Announces card end -->

        </div>
</x-main>