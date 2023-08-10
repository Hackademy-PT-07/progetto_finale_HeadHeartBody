<x-main>
    <x-slot:pageName>Titolo {{$announce->title}}</x-slot:pageName>

    <div class="pt-5 mt-5 text-center">
               
        <span id="logo">Annuncio {{$announce->title}}</span><br>
       
    <div class="container col-6">
        <div class="row">
        <div id="carouselExampleFade" class="carousel slide carousel-fade pb-3">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://picsum.photos/seed/picsum/300/150" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class='text-decoration-underline text-danger'>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://picsum.photos/300/150/?blur" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class='text-decoration-underline text-danger'>second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="https://picsum.photos/300/150?grayscale" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class='text-decoration-underline text-danger'>Third slide label</h5>
                    <p>Some representative placeholder content for the Third slide.</p>
                </div>
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
    </div>

    <h4 class="card-title"> Titolo  {{$announce->title}}</h4>

    <p class="card-text">Descrizione: {{$announce->description}}</p>

    <p class="card-text">Prezzo: {{$announce->price}}</p>

    <p class="card-footer">Creato il: {{$announce->created_at->format("d/m/Y")}} - Da: {{$announce->user->name}} </p>
    
</x-main>