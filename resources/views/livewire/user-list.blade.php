<div>
    <h2>Utenti:</h2>
    @foreach($users as $user)
    <div class="d-flex justify-content-between py-2 border-top">
        <span>{{$user->name}}</span>
        <div>
        <button class="btn btn-sm btn-outline-warning ms-3" wire:click="editUser({{$user->id}})">{{ __('ui.modAd') }}</button>
        <button class="btn btn-sm btn-outline-danger ms-3" wire:click="deleteUser({{$user->id}})">{{ __('ui.deleteAd') }}</button>
        </div>
    </div>
    @endforeach
</div>