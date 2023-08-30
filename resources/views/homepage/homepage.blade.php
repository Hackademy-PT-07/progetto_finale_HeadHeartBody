<x-main>
    <x-slot:pageName>Homepage</x-slot:pageName>

<div class="d-flex justify-content-center mt-3 pt-5 search">


    <form action="{{route('announces.filter')}}" class="row d-flex justify-content-center align-items-center ms-5 ps-5" method="GET">

        <div class="col-12 col-md-3">
        <label for="category" class="form-label"></label>
        <select class="form-select select-bg" aria-label="Default select example" id="category" name="category">
            <option  selected @if($category) value="{{key($category)}}" @else value="" @endif>
                @if($category) {{$category[key($category)]}} @else {{__('ui.categories')}} @endif</option>
            @if($category)<option value="">{{ __('ui.filterOff') }}</option>@endif
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{__('ui.category_'.$category->id)}}</option>
            @endforeach
        </select>
        </div>

        <div class="col-12 col-md-3">
            <label for="searched" class="form-label"></label>
            <input name="searched" class="form-control select-bg" list="datalistOptions" id="searched" name="searched" type="search" placeholder="{{ __('ui.search') }}" @if($searched) value="{{$searched}}" @endif>

        </div>

        <div class="col-12 col-md-3">
            <label for="order" class="form-label"></label>
            <select class="form-select select-bg" aria-label="Default select example" id="order" name="order">
            <option  selected @if($order) value="{{key($order)}}" @else value="" @endif>
                    @if($order) {{$order[key($order)]}} @else {{ __('ui.reorder') }} @endif</option>
                @if($order)<option value="">{{ __('ui.filterOff') }}</option>@endif
                <option value="Desc">{{ __('ui.mostRecent') }}</option>
                <option value="Asc">{{ __('ui.older') }}</option>
                <option value="PriceDesc">{{ __('ui.moreExpensive') }}</option>
                <option value="PriceAsc">{{ __('ui.lessExpensive') }}</option>
            </select>

        </div>

        <div class="col-12 col-md-3">
            <button class="btn btn-warning mt-4"> {{ __('ui.search') }} </button>
        </div>
    </form>

</div>


    <div class="mt-5 text-center">

        <div class="mt-3 pt-2 pb-2 text-center text-warning">
            <a href="{{route('announces.index')}}">
                <h4 class="fst-italic text-capitalize text-decoration-underline text-warning" id="titleForm"> {{ __('ui.title') }} </h4>
            </a>
        </div>

        <div class="mt-3 mb-5">
            <x-success />
        </div>

    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide my-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-vector/worldwide-connection_53876-90449.jpg?w=740&t=st=1691689711~exp=1691690311~hmac=0934f82063cc1b8c644a50a5bf785da3eaf7cb4065825136de5ab364307e533e" style="height:550px; width:100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-photo/top-view-happy-easter-background_1921-1186.jpg" style="height:550px; width:100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/vehicles-boxes-supply-chain-representation_23-2149853158.jpg?w=740&t=st=1691689210~exp=1691689810~hmac=fc239f90cbaecb45565ce335fe3469640f410cf714240f90b5f4dbdcceb0445f" style="height:550px; width:100%" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- <div class="container d-flex justify-content-center col-10 pb-5 pt-2">
        <div class="row py-3"> -->
        
            <!-- <div class="col-12 carousel">
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
                
            </div> -->
        <!-- </div>
    </div> -->

    <div class="d-flex d-inline justify-content-between">
        @if(auth()->user())
        <div class="text-center ms-3 pb-3 ">
            <a class="btn btn-warning buttonStyle" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
        </div>
        <div class="pb-5 me-3 text-center">
            <a class="btn btn-warning buttonStyle" href="{{route('announces.index')}}">{{ __('ui.allAnnounces') }}</a>
        </div>
        @endif
    </div>


    <div class="container mb-5">
        <div class="row d-flex justify-content-center">
            
            @foreach($categories as $category)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-3 card-bgc">
                <div class="card card-bdash">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="circle-airplane mb-4 mt-2">
                            <i class="bi bi-tags color-card"></i>
                        </div>

                        <a class="text-decoration-underline fs-4 fw-semibold" style="color: rgb(87, 7, 141);" href="#">{{$category->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <!-- form lavora con noi -->
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 pt-5 ">
            <h2 class="fst-italic ps-2 formTitle">{{ __('ui.workWithUsForm') }}</h2>
            <div class="card">
                <div class="card-body"> 
                    <x-success />

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="col-12">
                                    <label for="username">{{ __('ui.nameForm') }}</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">Email</label>
                                    <input type="email" name="email" id="email"  class="form-control">
                                    @error('Email') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                            
                                <div class="col-12">
                                    <label for="announce.price">{{ __('ui.messageForm') }}</label>
                                    <textarea rows="6"  name="textMessage" id="textMessage"  class="form-control"></textarea>
                                    @error('textMessage') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                
                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-warning">{{ __('ui.sendForm') }}</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>