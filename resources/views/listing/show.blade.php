
    <x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4">
        Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="hidden w-48 mr-6 md:block" src="{{$data->logo ? asset('storage/'.$data->logo) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaUYoezJdIEgYOritlZU7_L9hgMjHqoxR3Q14aStou8w&s'}}" alt="">
                <h3 class="text-2xl mb-2">{{$data['title']}}</h3>
                <div class="text-xl font-bold mb-4">
                    {{$data['company']}}
                </div>
                <x-tags :tags="$data['tags']"/>
                <div class="text-lg my-4">
                    {{$data['location']}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4 ">Job Description</h3>
                    <div class="text-lg space-y-6">
                        {{$data['description']}}
                        <a href="mailto:{{$data['email']}}" class="block bg-red-400 text-white mt-6 py-2 rounded-xl hover:opacity-80">Contact Employer</a>
                        <a href="{{$data['website']}}" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">Visit Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


