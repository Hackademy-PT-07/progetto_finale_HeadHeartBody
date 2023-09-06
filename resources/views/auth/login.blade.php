<x-main>
    <x-slot:pageName>{{ __('ui.login') }}</x-slot:pageName>
   
    <div class="container mt-4 mb-5 pt-5 vh-100">
        <div class="row">
            <div class="col-12 col-xl-8 mx-auto mt-5 pt-5">
                <h2 class="ps-2 formTitle text-center">{{ __('ui.login') }}</h2>
                <div class="mt-4">
                    <div class="card-body mx-4 formBox p-5">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" >
                                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" >
                                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                                    
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle" >{{ __('ui.login') }}</button>
                                </div>
                               <div class="col-12 text-center">
                                        <a href="{{route('google.login')}}" class="btn btn-warning buttonStyle"><img id="googleLogo" src="https://logo.clearbit.com/googlemail.com?size=50" alt="Google"> {{ __('ui.loginGoogle') }} </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</x-main>