<style>
    .user-bg{
        margin: 0;
        padding: 0;
        background-image: url('/images/user_bg.jpg');
        background-repeat: no-repaet;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    .waray{
            margin: 0;
            padding: 0;
            background-image: url('/images/users_page.jpg');
            background-repeat: no-repaet;
            background-attachment: fixed;
            background-size: cover;
            height: 100vh;
    }
</style>
<x-app-layout>
    <div class="waray">
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

    <br/>
    <div class="flex gap-10 justify-center">
        @foreach ($users as $user)
        <div class="max-w-xs relative">
            <div class="photo-wrapper">
                <img class="w-20 h-20 rounded-full mx-auto absolute -top-16 left-16 border-2" src="{{ $user->image_path }}" alt="User Profiles">
            </div>
            <div class="user-bg shadow-xl rounded-lg py-3 w-56">
                <div class="p-2">
                    <h3 class="text-center text-xl text-white font-medium leading-8">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    <div class="text-center text-gray-400 text-xs font-semibold">
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
</x-app-layout>
