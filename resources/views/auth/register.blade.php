<x-main>
    <x-slot:pageName>{{ __('ui.signUp') }}</x-slot:pageName>

    <div class="container mt-5 py-5 formBox p-xl-5">
        <section class="row mt-5 pt-3 align-items-center">
            <div class="col-12 col-xl-6 d-none d-xl-block">
                <img class="img-fluid" style="border-radius: 16px;" src="https://st4.depositphotos.com/26851100/41228/v/450/depositphotos_412284424-stock-illustration-register-now-vector-element-modern.jpg" alt="immagine register">
            </div>

            <div class="col-12 col-xl-6">   

            <section class="row d-flex justify-content-center my-3">
                <div class="col-1"></div>
                <div class="col-10 text-center formTitle">
                    <a href="{{route('announces.index')}}">
                        <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.signUp') }}</h2>
                    </a>
                </div>
                <div class="col-1"></div>
            </section>

                <form action="/register" method="POST">
                    @csrf
                    <section class="row g-3">
                        <div class="col-12">
                            <label for="name">{{ __('ui.nameForm') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                            @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12">
                            <label for="password_confirmation">{{ __('ui.acceptPsw') }}</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            @error('password_confirmation') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <a href="/login" class="btn btn-warning">{{ __('ui.login') }}</a>
                            <button type="submit" class="btn btn-warning">{{ __('ui.signUp') }}</button>
                        </div>
                    </section>
                </form>
            </div>
        </section>
    </div>
</x-main>