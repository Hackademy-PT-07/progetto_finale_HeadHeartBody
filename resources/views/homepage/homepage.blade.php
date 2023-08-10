<x-main>
    <x-slot:pageName>Homepage</x-slot:pageName>

    <div class="pt-5 mt-5 text-center">
        
        <span id="logo">Presto.it</span><br>
        <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="80">
        <h4 class="fst-italic text-decoration-underline mb-2 fw-bold"> Tutti i tuoi desideri in un click!</h4>
        
    </div>
    
    <div class="text-center mb-4 pt-3">
        <a class="btn btn-warning buttonShadow" href="{{ route('announces.form') }}">Inserisci annuncio</a>
    </div>
    
    
    <div class="container d-flex justify-content-center col-6">
        <div class="row">
            <div id="carouselExampleFade" class="carousel slide carousel-fade pb-3">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.freepik.com/free-vector/worldwide-connection_53876-90449.jpg?w=740&t=st=1691689711~exp=1691690311~hmac=0934f82063cc1b8c644a50a5bf785da3eaf7cb4065825136de5ab364307e533e" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block textShadow">
                            <h5 class='text-decoration-underline text-danger fw-bold'>Entra nel nostro network</h5>
                            <p class="text-warning fw-medium fst-italic">Milioni di utenti già registrati</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/premium-photo/top-view-happy-easter-background_1921-1186.jpg?w=740" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block textShadow">
                            <h5 class='text-decoration-underline text-danger fw-bold'>Basta un click!</h5>
                            <p class="text-warning fw-medium fst-italic">Acquista o vendi gli articoli di tuo interesse.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.freepik.com/free-photo/vehicles-boxes-supply-chain-representation_23-2149853158.jpg?w=740&t=st=1691689210~exp=1691689810~hmac=fc239f90cbaecb45565ce335fe3469640f410cf714240f90b5f4dbdcceb0445f" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block textShadow">
                            <h5 class='text-decoration-underline text-danger fw-bold'>Spedizioni in tutto il mondo</h5>
                            <p class="text-warning fw-medium fst-italic">Comodamente da casa tua.</p>
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
    
    
    <!-- <div class="container justify-content-start col-3">
        <div class="row">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca" label="Search">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
        </div>
    </div> -->
</x-main>