<x-main>
    <x-slot:pageName>Lavora con noi</x-slot:pageName>

<div class="container">
        <div class="row">
            <div class="col-12 mt-5 pt-5 ">
            <h2 class="fst-italic ps-2">Lavora con noi</h2>
            <div class="card">
                <div class="card-body"> 
                    <x-success />

                        <form action="" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="col-12">
                                    <label for="username">Username</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                    @error('name') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">Email</label>
                                    <input type="email" name="email" id="email"  class="form-control">
                                    @error('Email') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                            
                                <div class="col-12">
                                    <label for="announce.price">Breve descrizione</label>
                                    <input type="text"  name="descrizione" id="descrizione"  class="form-control">
                                    @error('descrizione') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                
                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-warning">Invia</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</x-main>