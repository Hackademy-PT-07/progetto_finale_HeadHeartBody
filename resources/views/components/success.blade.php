@if(session()->has("message"))
    <div class="alert alert-success mt-5 mb-2">
        {{ session("message") }}
    </div>
@endif