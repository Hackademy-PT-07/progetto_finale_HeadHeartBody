<form wire:submit.prevent="storeCategory">

    @if($category->id)
    <div class="col-12 d-flex justify-content-end">
        <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
    </div>
    @endif
    <div class="mb-3">
        <label for="category.name" class="form-label">Categoria</label>
        <input type="text" wire:model="category.name" class="form-control" id="category.name">
        @error('category.name') <span class="small text-danger">{{ $message }}</span> @enderror
    </div>
    <div>
    </div>
    @if($category->id)
    <div class="col-12 py-3 text-center">
        <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.modAd') }}</button>
    </div>
    @else
    <div class="col-12 py-3 text-center">
        <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.createAd') }}</button>
    </div>
    @endif
</form>