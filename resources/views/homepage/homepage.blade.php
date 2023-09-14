<x-main>
    <x-slot:pageName>Homepage</x-slot:pageName>

    <div class="container">

        <section class="row pt-5 mt-4">
            <x-success />
            <div class="col-12 d-none d-xl-block">
                <div id="carouselExampleAutoplaying" class="carousel slide m-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://img.freepik.com/free-vector/worldwide-connection_53876-90449.jpg?w=740&t=st=1691689711~exp=1691690311~hmac=0934f82063cc1b8c644a50a5bf785da3eaf7cb4065825136de5ab364307e533e" style="height:550px; width:100%" alt="Immagine carosello 1">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'> {{ __('ui.carousel_1_1') }} </h3>
                                <p class="fs-5 fw-medium fst-italic"> {{ __('ui.carousel_1_2') }} </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="https://img.freepik.com/premium-photo/top-view-happy-easter-background_1921-1186.jpg" style="height:550px; width:100%" alt="Immagine carosello 2">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'> {{ __('ui.carousel_2_1') }} </h3>
                                <p class="fs-5 fw-medium fst-italic"> {{ __('ui.carousel_2_2') }} </p>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <img src="https://img.freepik.com/free-photo/vehicles-boxes-supply-chain-representation_23-2149853158.jpg?w=740&t=st=1691689210~exp=1691689810~hmac=fc239f90cbaecb45565ce335fe3469640f410cf714240f90b5f4dbdcceb0445f" style="height:550px; width:100%" alt="Immagine carosello 3">
                            <div class="carousel-caption d-none d-md-block carouselText">
                                <h3 class='text-decoration-underline fw-bold'> {{ __('ui.carousel_3_1') }} </h3>
                                <p class="fs-5 fw-medium fst-italic"> {{ __('ui.carousel_3_2') }} </p>
                            </div>
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
            </div>
        </section>


        <section class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10 search px-3">
                <x-search :category="$category" :searched="$searched" :order="$order" />
            </div>

            <div class="col-1"></div>

        </section>

        <section class="row d-flex justify-content-center mt-4">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle my-5">
                <a href="{{route('announces.index')}}">
                    <h4 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.categories') }}</h4>
                </a>
            </div>
            <div class="col-1"></div>


            @foreach($categories as $category)
            <div class="col-4 col-xl-2 p-2 m-xl-1 text-center">
                <a class="m-0 link-offset-2 link-underline link-underline-opacity-0" href="{{route('hp.announces.category', $category->id)}}">
                    <div class="card card-bdash">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class=" mb-4 mt-2">
                                <i class="bi bi-megaphone m-3 fs-4"></i>
                            </div>
                        </div>
                        <p class="fw-bold fst-italic fs-5">{{__('ui.category_'.$category->id)}}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </section>

        <section class="row py-4">

            <section class="row d-flex justify-content-center">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle mt-5">
                    <a href="{{route('announces.index')}}">
                        <h4 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.announces') }}</h4>
                    </a>
                </div>
                <div class="col-1"></div>

                @foreach($announces as $announce)
                <div class="col-12 col-md-6 col-lg-4 mt-5 pt-5 d-flex justify-content-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('announces.index')}}">
                        <div class="card cardAds" style="width: 20rem;">
                            @if(count($announce->images))
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" @foreach($announce->images as $img) src="{{Storage::url($img->path)}}" @endforeach alt="{{$announce->title}}" />
                            @else
                            <img style="height: 250px; width: 100%; border-radius: 16px;" class="img-fluid p-2" src="{{asset('img/non-disponibile.gif')}}" alt="Logo">
                            @endif
                            <div class="card-body p-0">
                                <div class="card-title">
                                    <h5 class="text-center">{{ $announce->title }}</h5>
                                </div>
                                <div class="d-flex justify-content-end text-white fst-italic pe-3 pt-2">
                                    <span>{{__('ui.category_'.$announce->category->id)}}</span>
                                </div>
                                <p class="card-text m-0 py-3 text-center fs-3 text-white">{{ $announce->price }}€</p>
                                <p class="card-footer fst-italic m-0 d-flex justify-content-between text-white"><span><span class="small">{{ __('ui.createAt') }}:</span> {{ $announce->created_at->format("d/m/Y") }}</span> <span><span class="small">{{__('ui.createdBy')}}:</span> {{$announce->user->name}}</span> </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="text-end">
                    @if(auth()->user())
                    <div class="pt-5 pe-5">
                        <a class="btn btn-warning btn-lg" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
                    </div>
                    @endif
                </div>
            </section>


            <!-- form lavora con noi -->

            <div class="py-3" id="form"></div>

            <section class="row d-flex align-items-center formBox p-5">
                @if(auth()->user() && auth()->user()->role != 'revisor'&& auth()->user()->role != 'admin')


                <section class="row d-flex justify-content-center">
                    <div class="col-1"></div>
                    <div class="col-10 text-center formTitle my-3">
                        <a href="{{route('announces.index')}}">
                            <h4 class="text-capitalize fs-2 text-decoration-underline" id="firstTitle">{{ __('ui.workWithUsForm') }}</h4>
                        </a>
                    </div>
                    <div class="col-1"></div>
                </section>



                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="col-12 col-md-6">

                    <form action="{{route('LavoraConNoi.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-around">

                            <div class="col-12 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="username">{{ __('ui.nameForm') }}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-12 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="description">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                                @error('Email') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-12 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="textMessage">{{ __('ui.messageForm') }}</label>
                                <textarea rows="6" name="textMessage" id="textMessage" class="form-control">{{old('textMessage')}}</textarea>
                                @error('text') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-12 py-2 pt-3">
                                <button type="submit" class="buttonStyle btn btn-warning fw-bold fst-italic">{{ __('ui.sendForm') }}</button>
                            </div>

                        </div>

                    </form>

                </div>
                <div class="col-12 col-md-6 d-none d-md-block">
                    <img style="height: 400px; width: 660px" class="img-fluid" src="https://as2.ftcdn.net/v2/jpg/05/35/21/97/1000_F_535219768_aj2yAHThQMoQQoAMPLz2V5ZQUoHzBpdU.jpg" alt="Immagine lavora con noi">
                </div>


                <!-- form per contattare l'amministratore -->
                @elseif(auth()->user() && auth()->user()->role == 'revisor')




                <section class="row d-flex justify-content-center">
                    <div class="col-1"></div>
                    <div class="col-10 text-center formTitle my-3">
                        <a href="{{route('announces.index')}}">
                            <h4 class="text-capitalize fs-2 text-decoration-underline" id="firstTitle">{{ __('ui.contactadmin') }}</h4>
                        </a>
                    </div>
                    <div class="col-1"></div>
                </section>

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="col-12 col-md-6">

                    <form action="{{route('LavoraConNoi.save')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-11 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="username">{{ __('ui.nameForm') }}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="col-11 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="description">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                                @error('Email') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-11 py-2">
                                <label class="pb-2 fw-bold fst-italic" for="textMessage">{{ __('ui.messageForm') }}</label>
                                <textarea rows="6" name="textMessage" id="textMessage" class="form-control">{{old('name')}}</textarea>
                                @error('text') <span class="small text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-11 py-2">
                                <button type="submit" class="buttonStyle btn btn-warning fw-bold fst-italic">{{ __('ui.sendForm') }}</button>
                            </div>

                        </div>

                    </form>

                </div>
                <div class="col-12 col-md-6 d-none d-md-block">
                    <img style="height: 400px; width: 660px" class="img-fluid" src="https://previews.123rf.com/images/tawhy/tawhy1803/tawhy180300949/97796027-priorit%C3%A0-bassa-di-legge-con-la-lente-d-ingrandimento-nel-colore-arancione.jpg" alt="Immagine email">
                </div>
                @endif

            </section>
    </div>
</x-main>