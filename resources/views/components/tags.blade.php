@props(['tags'])

@php
    $tagsList = explode(',',$tags);
@endphp

<ul class="flex">
    @foreach ($tagsList as $tag)
    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>