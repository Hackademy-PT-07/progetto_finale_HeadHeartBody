    <div class="container">
        <section class="row pt-5">
            <div class="col-12">

            <section class="row d-flex justify-content-center mt-4">
            <div class="col-1"></div>
            <div class="col-10 text-center formTitle">
                <a href="{{route('announces.index')}}">
                    <h2 class="text-capitalize fs-9 text-decoration-underline" id="firstTitle">{{ __('ui.writeAd') }}</h2>
                </a>
            </div>
            <div class="col-1"></div>
            </section>

                <x-success />

                <form wire:submit.prevent="store">
                    <section class="row p-3">
                        @if($announce->id)
                        <div class="col-12 d-flex justify-content-end">
                            <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
                        </div>
                        @endif
                        <div class="col-12 pt-2">
                            <label for="announce.title">{{ __('ui.titleAd') }}</label>
                            <input type="text" name="announce.title" id="announce.title" wire:model="announce.title" class="form-control formLine">
                            @error('announce.title') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12 pt-2">
                            <label for="announce.category_id">{{ __('ui.categoryAd') }}</label>
                            <select name="announce.category_id" id="announce.category_id" wire:model="announce.category_id" class="form-select formLine" aria-label="Default select example">
                                <option selected>{{ __('ui.selectCategoryAd') }}</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{__('ui.category_'.$category->id)}}</option>
                                @endforeach
                            </select>
                            @error('announce.category_id') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12 pt-2">
                            <label for="description">{{ __('ui.descAd') }}</label>
                            <textarea name="announce.description" id="announce.description" wire:model="announce.description" class=" formLine form-control" maxlength="500"></textarea>
                            @error('announce.description') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12 pt-2">
                            <label for="announce.price">{{ __('ui.priceAd') }}</label>
                            <input type="number" min="0" name="announce.price" id="announce.price" wire:model="announce.price" class=" formLine form-control">
                            @error('announce.price') <span class="small text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="col-12 pt-2">
                            <label for="images">{{ __('ui.imgAd') }}</label>
                            <input type="file" wire:model="images" name="images" multiple class="form-control formLine @error('temporary_img.*') is_invalid @enderror">
                            @error('temporary_img.*') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        @if(!empty($images))
                        <div class="row">

                            <p>{{ __('ui.photoCar') }}:</p>
                            @foreach($images as $key => $image)
                            <div class="col-12 col-md-3">
                                <div class="mb-2 d-flex flex-column align-items-center justify-content-center">
                                    <img src="{{$image->temporaryUrl()}}" style="height: 100px; width:100px" alt="">
                                    <button type="button" wire:click="removeImages({{$key}})" class="btn btn-danger border-radius-2 mt-1">{{ __('ui.deleteAd') }}</button>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        @endif
                        @if(!empty($dbImg))
                        <div class="row">
                            <p>{{ __('ui.photoCar') }}:</p>
                            @foreach($dbImg as $key => $image)
                            <div class="col-12 col-xl-3">
                                <img src="{{asset('storage/' . $image->path)}}" style="height: 100px; width:100px" alt="{{$image->announce->title}}">
                                <button type="button" wire:click="removeDbImages({{$key}})" class="btn btn-danger border-radius-2">{{ __('ui.deleteAd') }}</button>

                            </div>
                            @endforeach
                        </div>
                        @endif

                        @if($announce->id)
                        <div class="col-12 py-3 text-end fw-bold fst-italic">
                            <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.modAd') }}</button>
                        </div>
                        @else
                        <div class="col-12 py-3 text-end fw-bold fst-italic">
                            <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.createAd') }}</button>
                        </div>
                        @endif
                    </section>
                </form>




            </div>
        </section>
    </div>