<x-layout>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage News
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        {{-- <thead>
          <tr>
            <th class="pl-0 pr-4 py-8">Image</th>
            <th class="px-4 py-8">Title</th>
            <th class="pr-0 pl-4 py-8">Action</th>
          </tr>
        </thead> --}}
        <tbody>
          @unless($listings->isEmpty())
          @foreach($listings as $listing)
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <img class="mr-6 mb-6 w-1/2" style="max-width:100px;"
                src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image-icon.png')}}" alt="" />
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a href="/listings/{{$listing->id}}"> {{$listing->title}} </a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <a href="/listings/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                  class="fa-solid fa-pen-to-square"></i>
                Edit</a>
              <form method="POST" action="/listings/{{$listing->id}}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
              </form>
              <a href="/listings/{{$listing->id}}/viewPdf" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
                View PDF</a>
              <a ref="/listings/{{$listing->id}}/downloadPdf" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
                Download PDF</a>
            </td>
          </tr>
          @endforeach
          @else
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" colspan="3">
              <p class="text-center">No Listings Found</p>
            </td>
          </tr>
          @endunless
        </tbody>
      </table>
  </x-card>
</x-layout>
