    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-4 mb-3 formTitle"><h2>{{ __('ui.writeAd') }}</h2></div>
                
                <div class="card-body"> 
                        <div class="formBox me-4 p-4">
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
                                    <label for="announce.title">{{ __('ui.titleAd') }}</label>
                                    <input type="text" name="announce.title" id="announce.title" wire:model="announce.title" class="form-control formLine">
                                    @error('announce.title') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.category_id">{{ __('ui.categoryAd') }}</label>
                                    <select name="announce.category_id" id="announce.category_id" wire:model="announce.category_id" class="form-select formLine" aria-label="Default select example">
                                        <option selected>{{ __('ui.selectCategoryAd') }}</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{__('ui.category_'.$category->id)}}</option>
                                        @endforeach
                                    </select>
                                    @error('announce.category_id') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="description">{{ __('ui.descAd') }}</label>
                                    <textarea name="announce.description" id="announce.description" wire:model="announce.description" class=" formLine form-control" maxlength="500"></textarea>
                                    @error('announce.description') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12">
                                    <label for="announce.price">{{ __('ui.priceAd') }}</label>
                                    <input type="number" min="0" name="announce.price" id="announce.price" wire:model="announce.price" class=" formLine form-control">
                                    @error('announce.price') <span class="small text-danger">{{ $message }}</span> @enderror

                                </div>
                                <div class="col-12" style='background-color:var(--background-color);'>
                                    <label for="images">{{ __('ui.imgAd') }}</label>
                                    <input type="file" wire:model="images" name="images" multiple class="form-control formLine @error('temporary_img.*') is_invalid @enderror">
                                    @error('temporary_img.*') <span class="small text-danger">{{ $message }}</span> @enderror
                                </div>
                                @if(!empty($images))
                                <div class="row">
                                    <div class="col-12">
                                        <p>{{ __('ui.photoCar') }}:</p>
                                        @foreach($images as $key => $image)
                                        <div class="mx-auto shadow rounded mb-2">
                                            <img src="{{$image->temporaryUrl()}}"  style="height: 100px; width:100px" alt="">
                                            <button type="button" wire:click="removeImages({{$key}})" class="btn btn-danger border-radius-2">{{ __('ui.deleteAd') }}</button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @if(!empty($dbImg))
                                <div class="row">
                                    <div class="col-12">
                                        <p>{{ __('ui.photoCar') }}:</p>
                                        @foreach($dbImg as $key => $image)
                                        <div class="mx-auto shadow rounded mb-2">
                                            <img src="{{asset('storage/' . $image->path)}}"  style="height: 100px; width:100px" alt="">
                                            <button type="button" wire:click="removeDbImages({{$key}})" class="btn btn-danger border-radius-2">{{ __('ui.deleteAd') }}</button>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                @if($announce->id)
                                <div class="col-12 py-3 text-end">
                                    <button type="submit" class="btn btn-warning buttonStyle me-3">{{ __('ui.modAd') }}</button>
                                </div>
                                @else
                                <div class="col-12 py-3 text-end">
                                    <button type="submit" class="btn btn-warning buttonStyle me-3">{{ __('ui.createAd') }}</button>
                                </div>
                                @endif
                            </div>
                        </form>
                        
                        
                    </div>
                
            </div>
        </div>
    </div>
</div>