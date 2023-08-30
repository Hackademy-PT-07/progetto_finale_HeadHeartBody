    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-4 mb-3 formTitle"><h2>Scrivi Annuncio</h2></div>
                
                <div class="card-body"> 
                        <div class="formBox mx-4">
                            <br>
                    <x-success />

                        <form wire:submit.prevent="store">
                            <div class="row p-3">
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
                                    <textarea name="announce.description" id="announce.description" wire:model="announce.description" class="form-control" maxlength="500"></textarea>
                                    @error('announce.description') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.price">Prezzo</label>
                                    <input type="number" min="0" name="announce.price" id="announce.price" wire:model="announce.price" class="form-control">
                                    @error('announce.price') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="images">Immagine</label>
                                    <input type="file" wire:model="images" name="images" id="images"  multiple class="form-control @error('temporary_img.*') is_invalid @enderror">
                                    @error('temporary_img.*') <span class="small text-danger">{{ $message }}</span> @enderror
                                </div>
                                @if(!empty($images))
                                <div class="row">
                                    <div class="col-12">
                                        <p>Foto caricate:</p>
                                        @foreach($images as $key => $image)
                                        <div class="img-preview mx-auto shadow rounded">
                                            <img src="{{$image->temporaryUrl()}}"  style="height: 100px; width:100px" alt="">
                                            <button wire:click="removeImg({{$key}})" class="btn btn-danger">Elimina</button>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                @if($announce->id)
                                <div class="col-12 py-3 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle">Modifica</button>
                                </div>
                                @else
                                <div class="col-12 py-3 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle">Crea</button>
                                </div>
                                @endif
                            </div>
                        </form>
                        
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>

