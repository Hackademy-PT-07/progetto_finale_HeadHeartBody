<x-main>
    <x-slot:pageName>Homepage</x-slot:pageName>

    <div class="pt-5 mt-5 text-center">

        <div class="d-flex align-items-center justify-content-center py-5 pe-5 formTitle text-black">
            <img src="https://png.pngtree.com/png-vector/20220821/ourmid/pngtree-speed-arrow-fast-quick-icon-logo-design-png-image_6119232.png" alt="Logo" width="80">
            <h1 id="logo" class="fs-1">Presto.it</h1>
        </div>

        <div class="mt-3 pt-2 pb-5 text-center text-warning">
            <a href="{{route('announces.index')}}"><h4 class="fst-italic text-capitalize text-decoration-underline text-warning" id="titleForm"> Tutti i tuoi desideri in un CLICK!</h4></a>
        </div>

    </div>


    <div class="container d-flex justify-content-center col-8 pb-5">
        <div class="row py-3">
            <div class="col-12 carousel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://img.freepik.com/free-vector/worldwide-connection_53876-90449.jpg?w=740&t=st=1691689711~exp=1691690311~hmac=0934f82063cc1b8c644a50a5bf785da3eaf7cb4065825136de5ab364307e533e" alt="Foto promo">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'>Entra nel nostro network</h3>
                                <p class="fs-5 fw-medium fst-italic">Milioni di utenti già registrati</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://img.freepik.com/premium-photo/top-view-happy-easter-background_1921-1186.jpg?w=740" alt="Foto promo">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'>Basta un click!</h3>
                                <p class="fs-5 fw-medium fst-italic">Acquista o vendi gli articoli di tuo interesse.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://img.freepik.com/free-photo/vehicles-boxes-supply-chain-representation_23-2149853158.jpg?w=740&t=st=1691689210~exp=1691689810~hmac=fc239f90cbaecb45565ce335fe3469640f410cf714240f90b5f4dbdcceb0445f" alt="Foto promo">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'>Spedizioni in tutto il mondo</h3>
                                <p class="fs-5 fw-medium fst-italic">Comodamente da casa tua.</p>
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
    </div>
    
    <div class="d-flex d-inline justify-content-between">
        @if(auth()->user())
            <div class="text-center ms-3 pb-3 ">
                <a class="btn btn-warning buttonStyle" href="{{route('announces.livewire')}}">Inserisci annuncio</a>
            </div>
            <div class="pb-5 me-3 text-center">
                <a class="btn btn-warning buttonStyle" href="{{route('announces.index')}}">Tutti gli annunci</a>
            </div>    
        @endif
    </div>


<div class="container mb-5">
<div class="row d-flex justify-content-center">
        <h2 class="text-center mb-3 formTitle">Categorie</h2>
            @foreach($categories as $category)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-3 card-bgc">
                    <div class="card card-bdash">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="circle-airplane mb-4 mt-2">
                                <i class="bi bi-tags color-card"></i>
                            </div>

                            <a class="text-decoration-underline fs-4 fw-semibold" style="color: rgb(87, 7, 141);" href="{{route('announces.categoryOrder', $category->id)}}">{{$category->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        
    </div>
</div>
</x-main>

