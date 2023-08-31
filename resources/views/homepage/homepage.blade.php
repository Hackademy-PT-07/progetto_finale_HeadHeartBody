<x-main>
    <x-slot:pageName>Homepage</x-slot:pageName>

<div class="d-flex justify-content-center mt-3 pt-5 search">


    <form action="{{route('announces.filter')}}" class="row d-flex justify-content-center align-items-center ps-2" method="GET">

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
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
            <button class="btn btn-warning buttonStyle mt-4"> {{ __('ui.search') }} </button>
        </div>
    </form>

</div>


    <div class="mt-5 text-center">

        <div class="mt-3 pt-2 pb-2 text-center formTitle">
            <a href="{{route('announces.index')}}">
                <h4 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle"> {{ __('ui.title') }} </h4>
            </a>
        </div>

        <div class="mt-3 mb-5">
            <x-success />
        </div>

    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide m-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-vector/worldwide-connection_53876-90449.jpg?w=740&t=st=1691689711~exp=1691690311~hmac=0934f82063cc1b8c644a50a5bf785da3eaf7cb4065825136de5ab364307e533e" style="height:550px; width:100%" alt="...">
        <div class="carousel-caption d-none d-md-block carouselText">        
        <h3 class='text-decoration-underline fw-bold'> {{ __('ui.carousel_1_1') }} </h3>
        <p class="fs-5 fw-medium fst-italic"> {{ __('ui.carousel_1_2') }} </p>
       </div>
    </div>

    <div class="carousel-item">
      <img src="https://img.freepik.com/premium-photo/top-view-happy-easter-background_1921-1186.jpg" style="height:550px; width:100%" alt="...">
      <div class="carousel-caption d-none d-md-block carouselText">
        <h3 class='text-decoration-underline fw-bold'> {{ __('ui.carousel_2_1') }} </h3>
        <p class="fs-5 fw-medium fst-italic"> {{ __('ui.carousel_2_2') }} </p>
    </div>
      
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/free-photo/vehicles-boxes-supply-chain-representation_23-2149853158.jpg?w=740&t=st=1691689210~exp=1691689810~hmac=fc239f90cbaecb45565ce335fe3469640f410cf714240f90b5f4dbdcceb0445f" style="height:550px; width:100%" alt="...">
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
    
    <div class="text-center">
        @if(auth()->user())
        <div class="pb-3 ">
            <a class="btn btn-warning buttonStyle" href="{{route('announces.livewire')}}">{{ __('ui.addAnnounce') }}</a>
        </div>
        @endif
    </div>


    <div class="container mb-5">
        <div class="row d-flex justify-content-center">
        <div class="col-12 mt-5 align-items-center">
                <h2 class="formTitle ps-5 mb-3">{{ __('ui.categories') }}</h2>
        </div>
            
            @foreach($categories as $category)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 p-3 ms-5 card-bg">
                <div class="card card-bdash ms-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="circle-airplane mb-4 mt-2">
                            <i class="bi bi-megaphone m-5"></i>
                        </div>

                        <a class="text-decoration-underline fs-6 fw-semibold" style="color:  var(--primary-dark-color);" href="#">{{$category->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <!-- form lavora con noi -->
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-5 align-items-center">
                <h2 class="formTitle ps-5 mb-3">{{ __('ui.workWithUsForm') }}</h2>
                <div class="card mx-5">
                <div class="card-body py-5"> 
                    <x-success />

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                        <div class="col-12 d-inline-flex">
                        
                            <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-around">
                                
                                <div class="col-8">
                                    <label for="username">{{ __('ui.nameForm') }}</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-8">
                                    <label for="description">Email</label>
                                    <input type="email" name="email" id="email"  class="form-control">
                                    @error('Email') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                            
                                <div class="col-8">
                                    <label for="announce.price">{{ __('ui.messageForm') }}</label>
                                    <textarea rows="6"  name="textMessage" id="textMessage"  class="form-control"></textarea>
                                    @error('textMessage') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                
                                <div class="col-8 pt-3">
                                    <button type="submit" class="buttonStyle btn btn-warning">{{ __('ui.sendForm') }}</button>
                                </div>
                                
                            </div>
                            
                            </form>
                            
                            <img class="joinUs" src="https://as2.ftcdn.net/v2/jpg/05/35/21/97/1000_F_535219768_aj2yAHThQMoQQoAMPLz2V5ZQUoHzBpdU.jpg" alt="">
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-main>