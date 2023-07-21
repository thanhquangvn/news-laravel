<x-layout>
  <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="mx-4">
    <x-card class="p-10">
      <div class="flex flex-col items-center justify-center text-center">
        <img class="mr-6 mb-6 w-1/2"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image-icon.png')}}" alt="" />

        <h3 class="text-2xl mb-2 w-1/2 text-left">
          {{$listing->title}}
        </h3>
        <div class="text-xl font-bold mb-4 w-1/2 text-left">{{$listing->author}}</div>
        <div class="w-1/2 text-left">
            <x-listing-tags :tagsCsv="$listing->tags"/>
        </div>

        <div class="text-lg my-4 w-1/2 text-left">
          <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
        </div>
        <div class="border border-gray-200 w-1/2 mb-6"></div>
        <h3 class="mb-2 w-1/2 text-left break-words break-all">
            {{$listing->description}}
        </h3>
        {{-- <div class="border border-gray-200 w-full mb-6"></div> --}}
      </div>
    </x-card>

    {{-- <x-card class="mt-4 p-2 flex space-x-6">
      <a href="/listings/{{$listing->id}}/edit">
        <i class="fa-solid fa-pencil"></i> Edit
      </a>

      <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
      </form>
    </x-card> --}}
  </div>
</x-layout>
