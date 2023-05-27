<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        @vite(['resources/css/app.css','resources/js/app.js'])

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            clifford: '#da373d',
                        }
                    }
                }
            }
        </script>

        <!-- Styles -->
        <style type="text/tailwindcss">
            @layer utilities {
                .content-auto {
                    content-visibility: auto;
                }
            }
        </style>
        <style>
            body{
                margin: 0;
                padding: 0;
                background-image: url('/images/dashboard_page.jpg');
                background-repeat: no-repaet;
                background-attachment: fixed;
                background-size: 100% 100%;
            }

            h1 {
                overflow:       hidden; /* Ensures the content is not revealed until the animation */
                border-right:   .15em solid orange; /* The typwriter cursor */
                white-space:    nowrap; /* Keeps the content on a single line */
                margin:         0 auto; /* Gives that scrolling effect as the typing happens */
                letter-spacing: .15em; /* Adjust as needed */
                animation:
                                typing 3.5s steps(40, end),
                                blink-caret .75s step-end infinite;
            }

            /* The typing effect */
            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
                from, to { border-color: transparent }
                50% { border-color: orange; }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-[#F1F6F9] flex justify-between px-24">
            <div>
                <img src="{{ url('/images/logo.png') }}" alt ="" class="w-30 h-20"/>
            </div>
            <div class="flex items-center ">
            @if (Route::has('login'))
                <div class="flex gap-6">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-black hover:text-gray-900 dark:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <button class="bg-[#394867] w-20 h-12 rounded-lg text-white hover:bg-[#212A3E] font-medium"><a href="{{ route('login') }}">Log in</a></button>

                        @if (Route::has('register'))
                            <button class="font-medium hover:font-bold"><a href="{{ route('register') }}">Register</a></button>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>

        <div class="flex min-h-screen items-center justify-center flex-col">
            <div class="w-max mb-8">
                <h1 class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5 text-8xl text-white font-extrabold uppercase ">Gamers Never Die</h1>
            </div>
            <button class="font-medium text-white border-2 hover:bg-red-600 w-60 h-16 rounded-full duration-500">Find Tournament</button>
        </div>
    </body>
</html>
