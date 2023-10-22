
    <x-layout>
    @include('partials._hero')
    @include('partials._search')
    @unless (count($datas) == 0)

    @foreach ($datas as $data)
    <x-listing-card :data='$data'/>
    @endforeach

    @else
        <p>No datas:</p>
    @endunless
<div class="mt-6 p-4">
    {{$datas->links()}}
</div>
    </x-layout>
