<div class="ps-3 my-1">
    <h3 class="text-decoration-underline fw-bold">{{ __('ui.categories') }}:</h3>
    @foreach($categories as $category)
    <div class="d-flex justify-content-between fs-5 ps-2 py-2 border-bottom">
        <span>{{__('ui.category_'.$category->id)}}</span>
        <div>
        <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editCategory({{$category->id}})"><i class="bi bi-pen"></i></button>
        <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteCategory({{$category->id}})"><i class="bi bi-trash3-fill"></i></button>
        </div>
    </div>
    @endforeach
</div>