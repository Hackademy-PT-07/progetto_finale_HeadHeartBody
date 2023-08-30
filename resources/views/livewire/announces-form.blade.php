    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-4 mb-3 formTitle"><h2>{{ __('ui.writeAd') }}</h2></div>
                
                <div class="card-body"> 
                        <div class="formBox mx-4">
                            <br>
                    <x-success />

                        <form wire:submit.prevent="store" enctype="multipart/form-data">
                            <div class="row p-3">
                                @if($announce->id)
                                    <div class="col-12 d-flex justify-content-end">
                                        <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <label for="announce.title">{{ __('ui.titleAd') }}</label>
                                    <input type="text" name="announce.title" id="announce.title" wire:model="announce.title" class="form-control">
                                    @error('announce.title') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.category_id">{{ __('ui.categoryAd') }}</label>
                                    <select name="announce.category_id" id="announce.category_id" wire:model="announce.category_id" class="form-select" aria-label="Default select example">
                                        <option selected>{{ __('ui.selectCategoryAd') }}</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('announce.category_id') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">{{ __('ui.descAd') }}</label>
                                    <textarea name="announce.description" id="announce.description" wire:model="announce.description" class="form-control" maxlength="500"></textarea>
                                    @error('announce.description') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.img">{{ __('ui.imgAd') }}</label>
                                    <input type="file" name="announce.img" id="announce.img" wire:model="img" class="form-control">
                                    @error('announce.img') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.price">{{ __('ui.priceAd') }}</label>
                                    <input type="number" min="0" name="announce.price" id="announce.price" wire:model="announce.price" class="form-control">
                                    @error('announce.price') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                @if($announce->id)
                                <div class="col-12 py-3 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.modAd') }}</button>
                                </div>
                                @else
                                <div class="col-12 py-3 text-center">
                                    <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.createAd') }}</button>
                                </div>
                                @endif
                            </div>
                        </form>
                        
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>

