<x-main>
    <x-slot:pageName>{{ __('ui.login') }}</x-slot:pageName>
   
    <div class="container mt-5 py-5 formBox p-xl-5">
        <section class="row mt-5 pt-3 align-items-center">
            <div class="col-12 col-xl-6">
            <section class="row d-flex justify-content-center my-5">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle">
                    <a href="{{route('announces.index')}}">
                        <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.login') }}</h2>
                    </a>
                </div>
                <div class="col-1"></div>
            </section>

            <form action="/login" method="POST">
                            @csrf
                            <section class="row g-3">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" >
                                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" >
                                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                                    
                                </div>
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="/register" class="btn btn-warning">{{ __('ui.signUp') }}</a>
                                    <button type="submit" class="btn btn-warning buttonStyle" >{{ __('ui.login') }}</button>
                                </div>
                               <div class="col-12 text-center py-5">
                                        <a href="{{route('google.login')}}" class="btn btn-warning buttonStyle"><img id="googleLogo" src="https://logo.clearbit.com/googlemail.com?size=30" alt="Google"> {{ __('ui.loginGoogle') }} </a>
                                </div>
                            </section>
                        </form>
            </div>
            <div class="col-12 col-xl-6 d-none d-xl-block">
                <img class="img-fluid" style="border-radius: 16px;" src="https://img.itch.zone/aW1nLzgzMjEzOTkuanBn/original/R%2Br0qn.jpg" alt="immagine login">
            </div>
        </section> 
    </div>
</x-main>