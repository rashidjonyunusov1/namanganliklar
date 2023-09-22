@php

    $categories = \App\Models\Category::all();
@endphp
<ul class="navbar__menu basic-flex">
    @foreach($categories as $item)
        <li class="menu__item"><a href="{{ route('pages.get_list', $item->id) }}">{{ $item['c_name_'.\App::getLocale()] }}</a></li>
    @endforeach
</ul>