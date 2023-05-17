<x-app-layout>
    <script src="https://kit.fontawesome.com/fcd2fdae41.js" crossorigin="anonymous"></script>
    <div>
        <div class="w-full">
            <img class="w-screen lg:h-[700px]" src="{{ asset('/images/esports_poster1.jpg') }}"/>
        </div>
        <div>
            <div class="text-white uppercase py-10 flex justify-center font-bold text-5xl">
                <h1>Choose a Game</h1>
            </div>
            <div class="flex justify-center gap-5">
                <button class="flex items-center bg-gray-800 w-56 h-16 uppercase text-lg font-bold text-white brightness-50 rounded-lg hover:brightness-100 duration-500"> <img class="w-10 h-10 mx-2 rounded-md" src="{{ asset('/images/ml_logo.png') }}">Mobile Legends</button>
                <button class="flex items-center bg-gray-800 w-56 h-16 uppercase text-lg font-bold text-white brightness-50 rounded-lg hover:brightness-100 duration-500"> <img class="w-10 h-10 mx-2 rounded-md" src="{{ asset('/images/codm.png') }}">Call Of Duty</button>
                <button class="flex items-center bg-gray-800 w-56 h-16 uppercase text-lg font-bold text-white brightness-50 rounded-lg hover:brightness-100 duration-500"> <img class="w-10 h-10 mx-2 rounded-md" src="{{ asset('/images/dota2_logo.jpg') }}">Dota 2</button>
            </div>
        </div>
    </div>

    <div class="py-10 flex justify-center w-screen">
        <div class="flex">
            <img class="lg:w-[1000px]" src="{{ asset("/images/tournament_ml_poster.jpg") }}"/>
        </div>
        <div class="text-white bg-black w-64 px-4 py-6">
            <div>
                <h1 class="font-bold text-4xl pb-4">ONE Esports Community Tournament 2023</h1>
            </div>
            <hr/>
            <div class="py-4">
                <h1 class="text-gray-400 uppercase font-bold pb-3">Hosted By</h1>
                <div class="flex items-center">
                    <img class="w-14 h-14 rounded-md mr-2" src="{{ asset("/images/one_esports_logo.jpg") }}">
                    <h1 class="font-bold text-lg">One Esports</h1>
                </div>
            </div>
            <hr/>
            <div class="py-4">
                <div class="flex items-center pb-4">
                    <i class="fa-solid fa-calendar mr-6"></i>
                    <h1 class="font-bold">On Going</h1>
                </div>
                <div class="flex items-center">
                    <i class="fa-solid fa-trophy mr-6"></i>
                    <h1 class="font-bold">$225 USD Prize Pool</h1>
                </div>
            </div>
            <hr/>
            <div class="flex justify-center py-4">
                <button class="bg-red-600 w-3/4 h-12 font-bold text-lg rounded-lg hover:bg-red-400">Join</button>
            </div>
        </div>
    </div>

    <div class="py-10 flex justify-center w-screen">
        <div class="flex">
            <img class="lg:w-[1000px]" src="{{ asset("/images/codm_poster.jpg") }}"/>
        </div>
        <div class="text-white bg-black w-64 px-4 py-6">
            <div>
                <h1 class="font-bold text-4xl pb-4">ONE Esports Community Tournament 2023</h1>
            </div>
            <hr/>
            <div class="py-4">
                <h1 class="text-gray-400 uppercase font-bold pb-3">Hosted By</h1>
                <div class="flex items-center">
                    <img class="w-14 h-14 rounded-md mr-2" src="{{ asset("/images/one_esports_logo.jpg") }}">
                    <h1 class="font-bold text-lg">One Esports</h1>
                </div>
            </div>
            <hr/>
            <div class="py-4">
                <div class="flex items-center pb-4">
                    <i class="fa-solid fa-calendar mr-6"></i>
                    <h1 class="font-bold">On Going</h1>
                </div>
                <div class="flex items-center">
                    <i class="fa-solid fa-trophy mr-6"></i>
                    <h1 class="font-bold">$225 USD Prize Pool</h1>
                </div>
            </div>
            <hr/>
            <div class="flex justify-center py-4">
                <button class="bg-red-600 w-3/4 h-12 font-bold text-lg rounded-lg hover:bg-red-400">Join</button>
            </div>
        </div>
    </div>

    <div class="py-10 flex justify-center w-screen">
        <div class="flex">
            <img class="lg:w-[1000px]" src="{{ asset("/images/dota2_poster.jpg") }}"/>
        </div>
        <div class="text-white bg-black w-64 px-4 py-6">
            <div>
                <h1 class="font-bold text-4xl pb-4">ONE Esports Community Tournament 2023</h1>
            </div>
            <hr/>
            <div class="py-4">
                <h1 class="text-gray-400 uppercase font-bold pb-3">Hosted By</h1>
                <div class="flex items-center">
                    <img class="w-14 h-14 rounded-md mr-2" src="{{ asset("/images/one_esports_logo.jpg") }}">
                    <h1 class="font-bold text-lg">One Esports</h1>
                </div>
            </div>
            <hr/>
            <div class="py-4">
                <div class="flex items-center pb-4">
                    <i class="fa-solid fa-calendar mr-6"></i>
                    <h1 class="font-bold">On Going</h1>
                </div>
                <div class="flex items-center">
                    <i class="fa-solid fa-trophy mr-6"></i>
                    <h1 class="font-bold">$225 USD Prize Pool</h1>
                </div>
            </div>
            <hr/>
            <div class="flex justify-center py-4">
                <button class="bg-red-600 w-3/4 h-12 font-bold text-lg rounded-lg hover:bg-red-400">Join</button>
            </div>
        </div>
    </div>
    <div class="w-full">
        @include("layouts.footer");
    </div>

    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <script>
        function showDropdownOptions() {
            document.getElementById("options").classList.toggle("hidden");
            document.getElementById("arrow-up").classList.toggle("hidden");
            document.getElementById("arrow-down").classList.toggle("hidden");
        }
    </script>
</x-app-layout>
