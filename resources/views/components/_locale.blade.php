<form action="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn fi fi-{{$nation}}"></button>
</form>