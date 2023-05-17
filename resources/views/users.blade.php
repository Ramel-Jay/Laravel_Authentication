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

{{-- <div class="flex justify-center lg:pt-20">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-3/4">
    <form method="GET" action="{{ route('search.user') }}" class="form-control">
        @csrf;
        @method('get');
        <div class="flex items-center justify-end py-4 bg-white dark:bg-gray-800">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <x-text-input type="text" id="query" name="query" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
            </div>
        </div>
    </form>
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
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="{{ $user->image_path }}" alt="User image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">{{ $user->first_name }}</div>
                        </div>
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
    </table>
</div>
</div> --}}


    <div class="flex justify-center pt-10">
        <div>
            <div>
                <form class="input-group" action="{{ route('search.user') }}" method="GET">
                    @csrf
                    @method('get')
                    <x-text-input type="text" class="form-control" name="query" id="query" placeholder="search" autocomplete="off"/>
                    <div>
                        <span></span>
                    </div>
                </form>
            </div>
        <div class="relative lg:h-[700px] overflow-x-auto shadow-md sm:rounded-lg lg:w-[1000px]">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                    <tr>
                        <th scope="col" >
                            Profile
                        </th>
                        <th scope="col" class="pr-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email / Username
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th class="pl-6 py-4 flex justify-center">
                                <img src={{ $user->image_path }} action="userProfile" class="w-16 h-16 rounded-full"/>
                            </th>
                            <th scope="row" class="pr-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                {{ $user->first_name }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $user->last_name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    {{-- <div class="mx-36 grid lg:grid-cols-4 gap-y-40 content-center h-auto mt-20">
        @foreach ($users as $user)
        <div class="max-w-xs relative grid place-content-center h-28">
            <div class="photo-wrapper flex justify-center">
                <img class="w-36 h-36 rounded-full mx-auto absolute -top-20 border-4 border-white" src="{{ $user->image_path }}" alt="User Profiles">
            </div>
            <div class="bg-gradient-to-br from-pink-500 via-red-500 to-yellow-500 shadow-2xl rounded-md py-3 w-56 h-44 flex justify-center items-end">
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
    </div> --}}
</div>
</x-app-layout>
