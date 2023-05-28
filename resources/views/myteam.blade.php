<x-app-layout>
    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="bg-green-500 text-white p-3 rounded-lg shadow-lg hover:bg-green-400">Create a Team</button>
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        Create your Player
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form method="POST" action={{ route('myteam') }}>
                        @csrf

                        <div class="flex flex-col">

                            <div>
                                <label for="game" class="block mb-2 text-sm font-medium text-white">Select Role</label>
                                <select id="game" name="user_id" class="border text-sm rounded-l block w-full p-2.5 bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option selected>Captain</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name')" required autofocus autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>

                            <div>
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name')" required autofocus autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                            </div>

                            <div>
                                <x-input-label for="ign" :value="__('Ingame Name')" />
                                <x-text-input id="ign" name="ign" type="text" class="mt-1 block w-full" :value="old('ign')" required autofocus autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('ign')" />
                            </div>

                            <div>
                                <x-input-label for="igid" :value="__('Ingame ID')" />
                                <x-text-input id="igid" name="igid" type="text" class="mt-1 block w-full" :value="old('igid')" required autofocus autocomplete="off" />
                                <x-input-error class="mt-2" :messages="$errors->get('igid')" />
                            </div>

                            <div>
                                <label for="game" class="block mb-2 text-sm font-medium text-white">Select Game</label>
                                <select id="game" name="game" class="border text-sm rounded-l block w-full p-2.5 bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option selected>Games</option>
                                    <option value="ml">Mobile Legends</option>
                                    <option value="codm">Call of Duty Mobile</option>
                                    <option value="dota2">Dota 2</option>
                                </select>
                            </div>

                            <div>
                                <label for="game" class="block mb-2 text-sm font-medium text-white">Select Role</label>
                                <select id="game" name="role_id" class="border text-sm rounded-l block w-full p-2.5 bg-gray-900 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                                    <option selected>Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                        <button type="submit" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Save</button>
                        <button data-modal-hide="defaultModal" type="button" class="focus:ring-4 focus:outline-none rounded-lg border text-sm font-medium px-5 py-2.5 focus:z-10 bg-gray-700 text-gray-300 border-gray-500 hover:text-white hover:bg-gray-600 focus:ring-gray-600">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-400">
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Captain
                    </th>
                    <th scope="col" class="px-6 py-3">
                        First Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ingame Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ingame ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Game
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($myteam as $player)
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                            {{ $player->users->first_name }}
                        </th>
                        <th scope="row" class="px-6 py-4">
                            {{ $player->first_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $player->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->ign }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->igid }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->roles->role }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $player->game }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
