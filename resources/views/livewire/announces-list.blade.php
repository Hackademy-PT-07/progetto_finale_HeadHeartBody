<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="bg-white">
                <tr>
                    <th class="fs-3">I tuoi annunci:</th>
                </tr>
                @foreach($announces as $announce)
                <tr class="border-bottom border-black">
                    <td>
                        <div class="pt-3">
                            <span>.{{$announce->title}}</span>
                            <span class="ps-3">{{$announce->price}}€</span>
                            <span class="ps-3">{{$announce->created_at}}</span>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                        <button class="btn btn-sm btn-primary ms-3" wire:click="editAnnounce({{$announce->id}})">Modifica</button>
                        <button class="btn btn-sm btn-danger ms-3" wire:click="deleteAnnounce({{$announce->id}})">Elimina</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>