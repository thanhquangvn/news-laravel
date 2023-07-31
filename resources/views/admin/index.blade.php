<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl mt-8 mb-4 font-bold">All Users</h1>

        <table class="table-auto w-full">
            <thead class="text-left bg-gray-400 text-white">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="{{ $loop->even ? 'bg-gray-200' : 'bg-white' }}">
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->role }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.users.show', $user) }}" class="text-blue-500 hover:underline mr-2">View Details</a>
                            <a href="{{ route('admin.users.show', $user) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <a href="{{ route('admin.users.show', $user) }}" class="text-blue-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
