<x-app-layout>
    <div>
        <form class="input-group" action="{{ route('search.user') }}" method="GET">
            @csrf
            @method('get')
            <input type="text" class="form-control" name="query" id="query" placeholder="search"/>
            <div>
                <span></span>
            </div>
        </form>
    </div>

{{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email/Username
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                        <img src={{ $user->image_path }} action="" style="width: 20px; height: 20px; border-radius: 50%;"/>{{ $user->first_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->last_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    <div class="flex gap-10 justify-center">

        @foreach ($users as $user)
        <div class="max-w-xs">
            <div class="bg-white shadow-xl rounded-lg py-3 w-56 h-70">
                <div class="photo-wrapper p-2">
                    <img class="w-20 h-20 rounded-full mx-auto" src="{{ $user->image_path }}" alt="John Doe">
                </div>
                <div class="p-2">
                    <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    <div class="text-center text-gray-400 text-xs font-semibold">
                        <p>{{ $user->email }}</p>
                    </div>
                    {{-- <table class="text-xs my-3">
                        <tbody><tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">First Name</td>
                            <td class="px-2 py-2">{{ $user->first_name }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Last Name</td>
                            <td class="px-2 py-2">{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                            <td class="px-2 py-2">{{ $user->email }}</td>
                        </tr>
                    </tbody></table> --}}

                </div>
            </div>
        </div>
        @endforeach

        </div>
</div>

</x-app-layout>
