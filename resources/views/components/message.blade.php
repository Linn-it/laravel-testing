@if (session()->has('message'))

<div x-data="{show : true}" x-init='setTimeout(() => show = false,3000)' x-show='show' class="fixed top-0 right-0 bg-red-500 py-3">
    <p>{{session('message')}}</p>
</div>
    
@endif