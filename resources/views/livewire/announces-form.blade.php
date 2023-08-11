    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class='text-decoration-underline text-center bg-warning bg-gradient border border-4 border-warning rounded-top-4 p-3 mb-0 mt-5' id="titleForm">Crea Annuncio</h2>

            
            <div class="card mt-0 p-3 border border-4 border-warning rounded-bottom-4">
                <div class="card-body">
                        
                    <x-success />

                        <form wire:submit.prevent="store" enctype="multipart/form-data">
                            <div class="row">
                                @if($announce->id)
                                <div class="col-12 d-flex justify-content-end">
                                    <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
                                </div>
                                @endif
                                <div class="col-12">
                                    <label for="announce.title">Titolo</label>
                                    <input type="text" name="announce.title" id="announce.title" wire:model="announce.title" class="form-control">
                                    @error('announce.title') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.category_id">Categoria</label>
                                    <select name="announce.category_id" id="announce.category_id" wire:model="announce.category_id" class="form-select" aria-label="Default select example">
                                        <option selected>Seleziona Categoria</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('announce.category_id') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">Descrizione</label>
                                    <input type="text" name="announce.description" id="announce.description" wire:model="announce.description" class="form-control">
                                    @error('announce.description') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.img">Immagine</label>
                                    <input type="file" name="announce.img" id="announce.img" wire:model="announce.img" class="form-control">
                                    @error('announce.img') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.price">Prezzo</label>
                                    <input type="number" min="0" name="announce.price" id="announce.price" wire:model="announce.price" class="form-control">
                                    @error('announce.price') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                @if($announce->id)
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