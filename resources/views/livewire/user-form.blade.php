<form wire:submit.prevent="storeUser">
    @if($user->id)
    <div class="col-12 d-flex justify-content-end">
        <button wire:click="cleanForm" class="btn btn-warning btn-sm"><span class="bi bi-arrow-clockwise"></span></button>
    </div>
    @endif
    <div class="mb-3">
        <label for="user.name" class="form-label">Nome Utente</label>
        <input type="text" wire:model="user.name" class="form-control" id="user.name">
        @error('user.name') <span class="small text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="user.namemaile" class="form-label">Email</label>
        <input type="text" wire:model="user.email" class="form-control" id="user.email">
        @error('user.email') <span class="small text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <div class="mb-2">Ruolo</div>
        <select class="form-select" wire:model="user.role" aria-label="Default select example">
            @if($user->role)
            <option selected>{{$user->role}}</option>
            @else
            <option selected>Seleziona il ruolo dell'utente</option>
            @endif
            @foreach(['user', 'revisor', 'admin'] as $role)
            <option value="{{$role}}">{{$role}}</option>
            @endforeach
        </select>
        @error('user.role') <span class="small text-danger">{{ $message }}</span> @enderror
    </div>

    @if($user->id)
    <div class="col-12 py-3 text-center">
        <button type="submit" class="btn btn-warning buttonStyle">{{ __('ui.modAd') }}</button>
    </div>
    @endif
</form>