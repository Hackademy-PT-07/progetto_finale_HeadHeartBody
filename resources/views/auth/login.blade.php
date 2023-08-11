<x-main>
    <x-slot:pageName>Accedi</x-slot:pageName>
   
    <div class="container mt-5 pt-5 vh-100">
        <div class="row">
            <div class="col-12 col-xl-8 mx-auto mt-5 pt-5">
                <h2 class="fst-italic ps-2">Accedi</h2>
                <div class="card mt-4">
                    <div class="card-body">
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
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning" >Accedi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</x-main>