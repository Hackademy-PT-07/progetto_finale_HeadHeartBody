    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea Annuncio</h1>
                <div class="card">
                    <div class="card-body">
                        <form wire:submit.prevent="store" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <label for="title">Titolo</label>
                                    <input type="text" name="title" id="title" wire:model="title" class="form-control">
                                    @error('title') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="category_id">Categoria</label>
                                    <select name="category_id" id="category_id" wire:model="category_id" class="form-select" aria-label="Default select example">
                                        <option selected>Seleziona Categoria</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach                                    
                                    </select>
                                    @error('category_id') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">Descrizione</label>
                                    <input type="text" name="description" id="description" wire:model="description" class="form-control">
                                    @error('description') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="img">Immagine</label>
                                    <input type="file" name="img" id="img" wire:model="img" class="form-control">
                                    @error('img') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="price">Prezzo</label>
                                    <input type="number" min="0" name="price" id="price" wire:model="price" class="form-control">
                                    @error('price') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-primary">Crea</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>