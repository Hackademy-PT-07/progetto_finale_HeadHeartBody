
<form action="{{route('announces.filter')}}" class="row d-flex justify-content-center" method="GET">

    <div class="col-12 col-xl-3">
        <label for="category" class="form-label"></label>
        <select class="form-select select-bg" aria-label="Default select example" id="category" name="category">
            <option selected @if($category) value="{{key($category)}}" @else value="" @endif>
                @if($category) {{$category[key($category)]}} @else {{__('ui.categories')}} @endif</option>
            @if($category)<option value="">{{ __('ui.filterOff') }}</option>@endif
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{__('ui.category_'.$category->id)}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-12 col-xl-3">
        <label for="searched" class="form-label"></label>
        <input name="searched" class="form-control select-bg" list="datalistOptions" id="searched" name="searched" type="search" placeholder="{{ __('ui.search') }}" @if($searched) value="{{$searched}}" @endif>

    </div>

    <div class="col-12 col-xl-3">
        <label for="order" class="form-label"></label>
        <select class="form-select select-bg" aria-label="Default select example" id="order" name="order">
            <option selected @if($order) value="{{key($order)}}" @else value="" @endif>
                @if($order) {{$order[key($order)]}} @else {{ __('ui.reorder') }} @endif</option>
            @if($order)<option value="">{{ __('ui.filterOff') }}</option>@endif
            <option value="Desc">{{ __('ui.mostRecent') }}</option>
            <option value="Asc">{{ __('ui.older') }}</option>
            <option value="PriceDesc">{{ __('ui.moreExpensive') }}</option>
            <option value="PriceAsc">{{ __('ui.lessExpensive') }}</option>
        </select>

    </div>

        <div class="col-12 col-xl-3 d-flex align-items-end justify-content-center pt-4 pt-xl-0">
            <button style="width: 306px; height: 37.6px" class="btn btn-warning">{{ __('ui.search') }}</button>
        </div>

</form>