@props(['data'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
      <img class="hidden w-48 mr-6 md:block" src="{{$data->logo ? asset('storage/'.$data->logo) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaUYoezJdIEgYOritlZU7_L9hgMjHqoxR3Q14aStou8w&s'}}" alt="">
      <div>
        <h3 class="text-2xl">
          <a href="/datas/{{$data['id']}}">{{$data['title']}}</a>
        </h3>
        <div class="text-xl font-bold mb-4">{{$data['company']}}</div>
        <x-tags :tags="$data['tags']"/>
        <div class="text-lg mt-4">
          {{$data['location']}}
        </div>
      </div>
    </div>
  </div>