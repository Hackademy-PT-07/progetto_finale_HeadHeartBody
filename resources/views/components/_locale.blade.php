<form action="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn border-0 ms-2 fi fi-{{$nation}}"></button>
</form>