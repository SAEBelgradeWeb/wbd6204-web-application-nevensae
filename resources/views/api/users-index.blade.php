<x-app-layout>
    <x-slot name="header"></x-slot>

    <x-slot name="slot">
        <div class="flex justify-between">
            <div class="h-96 w-1/4 bg-blue-500 inline-block">
                <nav>
                    <ul class="mt-32 text-white text-center">
                        <li class="m-2 hover:bg-blue-700 block"><a href="/cms-users">Users</a></li>
                        <li class="m-2 hover:bg-blue-700 block"><a href="#">Contests</a></li>
                        <li class="m-2 hover:bg-blue-700 block"><a href="#">Messages</a></li>
                    </ul>
                </nav>
            </div>
            <div class="w-4/5">
                <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
                    <tr class="text-left border-b-2 border-gray-300">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>

                        @foreach($users as $user)
                    <tr>
                            <td class="px-4 py-3">{{$user->id}}</td>
                            <td class="px-4 py-3">{{$user->name}}</td>
                            <td class="px-4 py-3">{{$user->email}}</td>

                            <td class="px-2 py-3"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="#">Show</a></td>
                            <td class="px-2 py-3"><a class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded" href="#">Edit</a></td>
                            <td class="px-2 py-3"><a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="#">Delete</a></td>
                    </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </x-slot>
</x-app-layout>
