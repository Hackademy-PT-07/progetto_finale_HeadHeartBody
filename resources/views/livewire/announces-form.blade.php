    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class='text-decoration-underline text-center bg-warning bg-gradient border border-4 border-warning rounded-top-4 p-3 mb-0' id="titleForm">Crea Annuncio</h2>

            
            <div class="card mt-0 border border-4 border-warning rounded-bottom-4">
                <div class="card-body">
                        
                    <x-success />

                        <form wire:submit.prevent="store" enctype="multipart/form-data">
                            <div class="row">
                                @if($title)
                                <div class="col-12 d-flex justify-content-end">
                                    <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
                                </div>
                                @endif
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
                                @if($title)
                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-warning">Modifica</button>
                                </div>
                                @else
                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-warning">Crea</button>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>