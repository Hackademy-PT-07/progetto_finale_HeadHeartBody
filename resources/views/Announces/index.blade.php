<x-main>
    <x-slot:pageName>Annunci</x-slot:pageName>

    <div class="container mt-4 justify-content-center py-5">
        <div class="row pt-5">
            <div class="container d-inline-flex">
                <div class="col-3">
                    <img class="immagine" src="https://www.farolloefalpala.it/wp-content/uploads/2017/07/megafono_urlo.png" alt="megafono">
                </div>
                <div class="col-9 formTitle">
                    <div class="text-center">
                        <h2 class="d-inline">Annunci</h2>
                    </div>
                </div>
            </div>
            <!-- Filter/Reorder section -->
            <div class="d-flex flex-wrap justify-content-between align-items-start pb-5">

                <form action="{{route('announces.filter')}}" class="ms-5 ps-5 d-flex" method="GET">

                    <label for="category" class="form-label"></label>
                    <select class="form-select ms-3 select-bg" aria-label="Default select example" id="category" name="category">
                        <option  selected @if($category) value="{{key($category)}}" @else value="" @endif>
                            @if($category) {{$category[key($category)]}} @else Categorie @endif</option>
                        @if($category)<option value="">Rimuovi filtro</option>@endif
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                    <label for="searched" class="form-label"></label>
                    <input name="searched" class="form-control ms-3 select-bg" list="datalistOptions" id="searched" name="searched" type="search" placeholder="Cerca" @if($searched) value="{{$searched}}" @endif>

                    <label for="order"  class="form-label"></label>
                    <select class="form-select ms-3 select-bg" aria-label="Default select example" id="order" name="order">
                    <option  selected @if($order) value="{{key($order)}}" @else value="" @endif>
                            @if($order) {{$order[key($order)]}} @else Riordina @endif</option>
                        @if($order)<option value="">Rimuovi filtro</option>@endif
                        <option value="Desc">Dal più recente</option>
                        <option value="Asc">Dal meno recente</option>
                        <option value="PriceDesc">Dal prezzo più alto</option>
                        <option value="PriceAsc">Dal prezzo pìù basso</option>
                    </select>

                    <button class="btn btn-warning ms-3"> Search </button>
                </form>

                <div>
                    @if(auth()->user())
                    <a class="btn btn-warning buttonStyle mb-3" href="{{route('announces.livewire')}}">Inserisci annuncio</a>
                    @endif
                </div>
            </div>

            <!-- Filter/Reorder section end -->

            <!-- Announces card -->

            @if(count($announces) > 0)
            @forelse($announces as $announce)
            <div class="col-12 col-md-6 col-lg-4 md-5 pt-3 d-flex justify-content-center">
                <figure class="snip1418 card">
                    <img class="img-fluid" style="height: 240px" src="{{Storage::url($announce->img)}}" alt="{{$announce->title}}" />
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
            <div class="text-center buttonStyle py-3 my-5" style="text-shadow: 5px 5px 10px white">
                <p class="fs-2 text-decoration-underline purple">
                    Nessun annuncio
                </p>
            </div>
            @endif
            <!-- Announces card end -->

        </div>
</x-main>