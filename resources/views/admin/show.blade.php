<x-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl mt-8 mb-4 font-bold">All Users</h1>

        <table class="table-auto w-full">
            <thead class="text-left bg-gray-400 text-white">
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            </tbody>
        </table>
    </div>
  </x-layout>


