<div>
    <h3 class="text-decoration-underline fw-bold">{{ __('ui.users') }}:</h3>
    @foreach($users as $user)
    <div class="d-flex justify-content-between ps-2 fs-5 py-2 border-bottom">
        <span>{{$user->name}}</span>
        <div>
        <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editUser({{$user->id}})"><i class="bi bi-pen"></i></button>
        <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteUser({{$user->id}})"><i class="bi bi-trash3-fill"></i></button>
        </div>
    </div>
    @endforeach
</div>