
<x-main>
    <x-slot:pageName>Registrati</x-slot:pageName>
    
    <div class="container mt-4 pt-5 vh-100">
        <div class="row">
            <div class="col-12 col-xl-8 mx-auto mt-5 pt-5">
                <h2 class="ps-2 formTitle text-center">Registrati</h2>
                <div class="mt-4">
                    <div class="card-body formBox p-5">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="row g-3">
                            <div class="col-12">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" >
                                    @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
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
                                <div class="col-12">
                                    <label for="password_confirmation">Conferma password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
                                    @error('password_confirmation') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle mt-3" >Registrati</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</x-main>