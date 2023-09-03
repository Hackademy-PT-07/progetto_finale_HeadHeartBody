<div>
    <h2>Categorie:</h2>
    @foreach($categories as $category)
    <div class="d-flex justify-content-between py-2 border-top">
        <span>{{$category->name}}</span>
        <div>
        <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editCategory({{$category->id}})">{{ __('ui.modAd') }}</button>
        <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteCategory({{$category->id}})">{{ __('ui.deleteAd') }}</button>
        </div>
    </div>
    @endforeach
</div>